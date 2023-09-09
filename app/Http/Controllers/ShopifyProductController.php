<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductPayload;
use App\ProductVariant;
use App\Product;
use App\ProductOtion;
use App\ProductImage;
use App\ShopifyClass;

class ShopifyProductController extends Controller
{
    public function saveProduct(){
        ini_set('max_execution_time', 1800); //3 minutes

      $productStrings = ProductPayload::all()->where('status','false');

      foreach($productStrings as $productString) {
        
       $updatePayload = ProductPayload::findOrFail($productString->id);
       $updatePayload->status = "1";
       $updatePayload->save();

         $vendor_id = $productString->vendor_id;

              $payload = json_decode($productString['payload'], true);

               $ProductData = $payload;
             
               // dd($ProductData);
           //   foreach ($payload['products'] as $ProductData) {
                 $ProductExists = Product::where('product_id',$ProductData['id'])->get();
                 if(count($ProductExists) == 0){
                //  dd($ProductData);
                     $Product  = new Product();
                     $Product->product_id          = $ProductData['id'] ;
                     $Product->vendor           = $ProductData['vendor'] ;
                     $Product->handle         = $ProductData['handle'];
                     $Product->title               = $ProductData['title'] ;
                     $Product->product_type        = $ProductData['product_type'] ;
                     $Product->status              = 'inactive'/*$ProductData['status']*/ ;
                     $Product->tags                = $ProductData['tags'] ;
                     $Product->variants            = count($ProductData['variants']) ;
                     $Product->images              = count($ProductData['images']);
                     $Product->name               = $ProductData['title'] ;
                     $Product->code               = $ProductData['id'] ;
                     $Product->type               = "Standard" ;
                     $Product->barcode_symbology               = "Code 128" ;
                     $Product->category_id     =12;
                     $Product->unit_id =7;
                     $Product->purchase_unit_id =1;
                     $Product->sale_unit_id =1;
                     $Product->save();
                     $VariantData=$ProductData['variants'];

                   $totalStock = 0;
                    foreach($VariantData as $variant){
              
                        $Variant             = new ProductVariant();
                        $Variant->product_id = $Product->id ;
                        $Variant->shopify_product_id = $Product->shopify_product_id ;
                        $Variant->title      = $variant['title'] ;
                        $Variant->price      = $variant['price']  ;
                        $Variant->sku        = $variant['sku'] ;
                        $Variant->admin_graphql_api_id       = $variant['admin_graphql_api_id'] ;
                        $Variant->size    = $variant['title'] ;
                        $Variant->barcode    = $variant['barcode'] ;
                        $Variant->weight     = $variant['weight'] ;
                        $Variant->weight_unit = $variant['weight_unit'] ;
                        $Variant->qty = $variant['inventory_quantity'] ;
                        $Variant->inventory_quantity     = $variant['inventory_quantity'] ;
                        $Variant->old_inventory_quantity     = $variant['old_inventory_quantity'] ;
                        $Variant->inventory_item_id     = $variant['inventory_item_id'] ;
                        $Variant->requires_shipping     = $variant['requires_shipping'] ;
                        $Variant->taxable     = $variant['taxable'] ;
                        $Variant->fulfillment_service     = $variant['fulfillment_service'] ;
                        $Variant->image_id     = $variant['image_id'] ;
                        $Variant->shopify_variant_id     = $variant['id'];


                        $Variant->save();


                        $totalStock += $variant['inventory_quantity'];

                     }

                     $ImageData=$ProductData['images'];

                        foreach($ImageData as $img){
                            
                           $Image          = new ProductImage();

                           $Image->shopify_product_id    = $img['product_id'];
                           $Image->product_id    = $Product->id;
                           $Image->position      = $img['position'];
                           $Image->src           = $img['src'];
                           $Image->width      = $img['width'];
                           $Image->height           = $img['height'];
                           $Image->admin_graphql_api_id           = $img['admin_graphql_api_id'];
                             $Image->save();
                        }
                    $optionsData=$ProductData['options'];
                   
                    foreach($optionsData as $options){
                       
                        foreach($options['values'] as $values){
                           
                        $option        = new ProductOtion();
                        $option->product_id        = $Product->id;
                        $option->variant_name        = $options['name'];
                        $option->shopify_product_id        = $options['product_id'];
                        $option->position        = $options['position'];
                        $option->values        = $values;
                        $option->shopify_option_id        = $options['id'];
                        $option->save();

                        
                        }

                    }
                    //  $Product->stock = $totalStock;
                     $Product->save();

                   }


                 }
           //   }


           return json_encode(array('status'=>'200','message'=>'Processed'));



    }
    public function fetchProducts(){
        
        ini_set('max_execution_time', 1800); //3 minutes

        $accessToken  = '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';
        // $vendorID  = $vendor->id;
        $storeName    =  'pakistan-fashion-lounge';
        $pID = 1;
        $sinceID = 0;
        // dd($accessToken,$vendorID,$storeName);
        $productsCount = ShopifyClass::shopify_call($accessToken, $storeName, "/admin/api/2023-04/products/count.json", array(), 'GET',array("Content-Type: application/json"));
        $productsCount = json_decode($productsCount['response'], true);
       $totalProducts = $productsCount['count'];


        $i = 0;
        $iT = ($totalProducts / 250);
        $sinceID = 0;
        for ($i=0; $i <= $iT; $i++) { 

          $prs = ShopifyClass::shopify_call($accessToken, $storeName, "/admin/products.json", array('since_id'=>$sinceID,'limit'=>'250'), 'GET',array("Content-Type: application/json"));

          $response = json_decode($prs['response'], true);
          // dd($response);

          $products = $response['products'];
          foreach($products as $product){
            //   dd($product);
            $pID = $product['id'];
            $prCheck = ProductPayload::where('product_id',$pID)->where('subject','upload')->first();

              if(!isset($prCheck->id)){
                  // dd($prCheck,$vendorID);
                $iProduct = new ProductPayload();
                $iProduct->product_id = $product['id'];
                $iProduct->subject    = 'upload';
                $iProduct->payload    = json_encode($product);

                $iProduct->save();




                }
             }


          $prs = ShopifyClass::shopify_call($accessToken, $storeName, "/admin/products.json", array('since_id'=>$sinceID,'limit'=>'250'), 'GET',array("Content-Type: application/json"));

          $response = json_decode($prs['response'], true);
          $products = $response['products'];
          foreach($products as $product){
              //  dd($product);
                $pID = $product['id'];
                $prCheck = ProductPayload::where('product_id',$pID)->where('subject','upload')->first();

                if(!isset($prCheck->id)){
                    // dd($prCheck,$vendorID);
                  $iProduct = new ProductPayload();
                  $iProduct->product_id = $product['id'];
                  $iProduct->subject    = 'upload'; 
                  $iProduct->payload    = json_encode($product);

                  $iProduct->save();

                }

          }

          $sinceID = $pID;

          echo count($products) ." products found". "last product id is $pID <hr>";

         }

    }
 
    public function collection(){
          $accessToken  = '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';
          // $vendorID  = $vendor->id;
          $storeName    =  'pakistan-fashion-lounge';

          $pID = 1;
          $sinceID = 0;
          // dd($accessToken,$vendorID,$storeName);

          $collectionCount = ShopifyClass::shopify_call($accessToken, $storeName, "/admin/smart_collections.json", array(), 'GET',array("Content-Type: application/json"));   
          $collectionCount = json_decode($collectionCount['response'], true);

          foreach($collectionCount as $collects){

            foreach($collects as $col){

              $collect = new Collection();
              $collect->handle = $col['handle'];
              $collect->title = $col['title'];
              $collect->sort_order = $col['sort_order'];
              $collect->published_scope = $col['published_scope'];
              $collect->admin_graphql_api_id = $col['admin_graphql_api_id'];
              $collect->collection_id = $col['id'];
              $collect->save();
            }
        }

      }

}

