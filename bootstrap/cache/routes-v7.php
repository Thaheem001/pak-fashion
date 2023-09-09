<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/fetch-data-general' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch-data-general',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/fetch-data-upgrade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'data-read',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/fetch-data-bugs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fetch-data-bugs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/migrate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::68o9Qn5yvet3td54',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CIS6dFQeC1FoFmgH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/addon-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pPoNIW806qOiBZGp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-coupon' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d102dDjXbeuTTf9c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auto-update-dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/developer-section' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'developer-section.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'developer-section.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/developer-section/bug-update-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bug-update-setting.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/developer-section/version-upgrade-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'version-upgrade-setting.submit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/new-release' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'new-release',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bugs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bug-update-page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/version-upgrade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'version-upgrade',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bug-update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bug-update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WfizUxEvZwlhdWqe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9gu0GaWqx0ThB0Rn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WQQHCUnP0qJFPYHS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/documentation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tRbhD4wwbw6EYn1b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o4HxZIRLXGebqD0H',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IQWSrmsJWzBbQYmm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ew0DdCU3ALvDr2b9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/yearly-best-selling-price' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xcHFbfFlwEZk686R',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/yearly-best-selling-qty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::beWreD6MVeuCfedK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/monthly-best-selling-qty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wuo89FHk4BSUSdz4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recent-sale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6cGZ3ztTyz2HILbn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recent-purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::35TLZJQlbA5YR3Oq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recent-quotation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WsYCZq3w7zgRZk5b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/recent-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kb365Cn7gm33D6vH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/role/set_permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.setPermission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'role.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/role/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importunit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/unit/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::z4RrqEE6TkgyPf65',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/unit/lims_unit_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/unit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'unit.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/unit/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5sqPtlG51hPXr8wa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category/category-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1f3RckXF7bLxMOVa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'category.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importbrand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/brand/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fdovxTtd4J93vK4l',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/brand/lims_brand_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/brand' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brand.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/brand/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importsupplier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/supplier/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7b46YXb6FdyEpVT1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/suppliers/clear-due' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.clearDue',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/supplier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/supplier/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importwarehouse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouse.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/warehouse/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Pdg29qMeU8lPyz3u',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/warehouse/lims_warehouse_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouse.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/warehouse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouse.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehouse.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/warehouse/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouse.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tables' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tables.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tables/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importtax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tax/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y8qx0R0A5OslC2jN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tax/lims_tax_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tax' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tax.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tax/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/product-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.product-data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/gencode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fel9URKD1ubVf1H9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pW15fN6x4LM10HM4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importproduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/exportproduct' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.export',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/print_barcode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.printBarcode',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/lims_product_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::17qJf6UHCJXot1Cb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r89A3UGyssU1rMDd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/sale-history-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gIWHgCSldLofM1aF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/purchase-history-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AabvalR2tEHxugJC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/sale-return-history-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9ar2O0YM9ZxJCzdG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/purchase-return-history-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7TVex4GIzVRgQEqa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/products/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importcustomer_group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer_group.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer_group/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ts118PgH5z1Els9N',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer_group/lims_customer_group_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer_group.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer_group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer_group.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer_group.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer_group/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer_group.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/discount-plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount-plans.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'discount-plans.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/discount-plans/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount-plans.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/discounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discounts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'discounts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/discounts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discounts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importcustomer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/add_deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.addDeposit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/update_deposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.updateDeposit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/deleteDeposit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.deleteDeposit',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7WCZdrq6lphDb8pn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/lims_customer_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customers/clear-due' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.clearDue',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/customer/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importbiller' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/biller/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IzTcRzJthzxEZvVn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/biller/lims_biller_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/biller' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/biller/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/sale-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D1cvUFktMpCkGU1S',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/sendmail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.sendmail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/sale_by_csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WJKBB6zNcjrTXS5U',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importsale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.pos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/lims_sale_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/lims_product_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_sale.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/getfeatured' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r3EREFLU80xnV0aJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/get_gift_card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UJGpNairL9wPYFIE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/paypalSuccess' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y3Kc7vl58950dRGZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/add_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.add-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/updatepayment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.update-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/deletepayment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.delete-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sjMVWiY7eEZk12Ld',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/print-last-reciept' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.printLastReciept',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/today-sale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nsoCDJxEL0TqbUA3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/check-discount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0FwqMpRjTqPUPmlx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sales.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sales/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delivery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delivery/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delivery/sendmail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery.sendMail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delivery/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/delivery/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g8i5uZAIRqJQ1JsC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quotations/quotation-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quotations/lims_product_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_quotation.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quotations/sendmail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotation.sendmail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quotations/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RA1g629uXvUb7XH3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quotations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/quotations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchases/purchase-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchases/lims_product_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_purchase.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchases/add_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.add-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchases/updatepayment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.update-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchases/deletepayment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.delete-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchases/purchase_by_csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MdcH9IepXxbssUJn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importpurchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchases/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6NLjQqdEsWKWP7an',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/purchases/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfers/transfer-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfers/transfer_by_csv' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x6RJnUKBwPh1rUi2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/importtransfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfers/lims_product_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_transfer.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfers/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZgwO9dKKoPitppnH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/transfers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/qty_adjustment/lims_product_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_adjustment.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/qty_adjustment/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MlYyviWpQsAa7SIF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/qty_adjustment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'qty_adjustment.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'qty_adjustment.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/qty_adjustment/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'qty_adjustment.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-sale/return-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::77OsZekzzZjtOAxZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-sale/sendmail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-sale.sendmail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-sale/lims_product_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_return-sale.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-sale/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M6oYxksM4XMIwxAq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-sale' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-sale.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'return-sale.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-sale/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-sale.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-purchase/return-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5LLkvLLvFhS5AeYO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-purchase/sendmail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-purchase.sendmail',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-purchase/lims_product_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product_return-purchase.search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-purchase/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M6r4DZsoOXiFE2Xc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-purchase.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'return-purchase.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/return-purchase/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-purchase.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/product_quantity_alert' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.qtyAlert',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/daily-sale-objective' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.dailySaleObjective',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/daily-sale-objective-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N7Sjva4xExy6Cqal',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/product-expiry' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.productExpiry',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/warehouse_stock' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.warehouseStock',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/best_seller' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n6HpifBWuflEPRg2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'report.bestSellerByWarehouse',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/profit_loss' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.profitLoss',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/product_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/product_report_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S46yf6Qzs1dPzVrY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/purchase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.purchase',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/sale_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.sale',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/sale-report-chart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.saleChart',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/payment_report_by_date' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.paymentByDate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/warehouse_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.warehouse',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/warehouse-sale-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8JhEJQKQcnCdYfPx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/warehouse-purchase-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P8sXIgX291KGlfbA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/warehouse-expense-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iMeIOwTGtIuwvQsZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/warehouse-quotation-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XjPVXmuHhO79jV13',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/warehouse-return-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rMBk3naFqzZ4wjHC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/user_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/user-sale-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yfOAe44lfqS0vLIr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/user-purchase-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::licAIeXIM2Gg4auK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/user-expense-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EmovM4jDppsbogjZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/user-quotation-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ylb9O2TPhEkrDJFs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/user-payment-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YhopP2znFtWIyEPC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/user-transfer-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nOCK8o6TQkfBo1OL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/user-payroll-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5jDusAJ4hyqdPkiT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer_report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.customer',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer-sale-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AWn3y9D17zDsm9D6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer-payment-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZBFxzfQlIZw1cbxx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer-quotation-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wwgfGZ1nUwf0UG7F',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer-return-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9QSEfjPtC8BuyeO8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer-group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.customer_group',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer-group-sale-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::doGe8sjwuowSQvZg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer-group-payment-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wuvcbwFUvXtdieM3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer-group-quotation-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mm0a4GwmViolEbKS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer-group-return-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NVdRJuoRH4Za9eBQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/supplier' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.supplier',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/supplier-purchase-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Lu2pg9GJHYEf3sM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/supplier-payment-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RHFB49CjPT9XRGOD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/supplier-return-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ije8QqFbM4QKNdef',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/supplier-quotation-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3aOIMdxiJGPK9BGu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer-due-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.customerDueByDate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/customer-due-report-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sPT0uobBcHZIAmgG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/supplier-due-report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'report.supplierDueByDate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/report/supplier-due-report-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XqM5KGNBeKolpxzZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/genpass' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fI8zhDyH4jpoQXMt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gWB9k2O4nejg6gZH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/general_setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.general',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/general_setting_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.generalStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/reward-point-setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.rewardPoint',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/reward-point-setting_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.rewardPointStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.backup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/mail_setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.mail',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/sms_setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.sms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/createsms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.createSms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/sendsms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.sendSms',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/hrm_setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.hrm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/hrm_setting_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.hrmStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/mail_setting_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.mailStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/sms_setting_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.smsStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/pos_setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.pos',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/pos_setting_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.posStore',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/empty-database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'setting.emptyDatabase',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/expense_categories/gencode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lfPClSK3mdjd75pS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/expense_categories/import' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense_category.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/expense_categories/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mzuPm9v3OS8MkJZk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/expense_categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense_categories.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'expense_categories.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/expense_categories/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense_categories.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/expenses/expense-data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/expenses/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fulYBtX03T3NAYJQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/expenses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/expenses/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gift_cards/gencode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dz5yFM21BcxAgTux',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gift_cards/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3fU9k7q70ZpFIbJT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gift_cards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gift_cards.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gift_cards.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gift_cards/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gift_cards.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coupons/gencode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e76A113sfR9QPyUV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coupons/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NmivPYged1fvxuK3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coupons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/coupons/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/accounts/balancesheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.balancesheet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/accounts/account-statement' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.statement',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/accounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/accounts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/money-transfers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'money-transfers.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'money-transfers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/money-transfers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'money-transfers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/departments/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0yDrjUdbeq0pNIjy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/departments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'departments.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/departments/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employees/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O4efE6AD59updT0k',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employees.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/employees/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E7TwJlftRDswCVSF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payroll/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/attendance/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5uu0hRwFFWFCCVgm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/attendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendance.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'attendance.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/attendance/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendance.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stock-count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-count.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stock-count.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/stock-count/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-count.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/holidays/deletebyselection' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UbM3IFVvHYhC6qKG',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/holidays' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'holidays.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'holidays.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/holidays/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'holidays.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cash-register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashRegister.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cash-register/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashRegister.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cash-register/close' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashRegister.close',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notifications.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notifications/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notifications.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/notifications/mark-as-read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bqh0On7uGbApGikG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/currency' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currency.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'currency.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/currency/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currency.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/custom-fields' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-fields.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'custom-fields.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/custom-fields/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-fields.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/woocommerce-install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'woocommerce.install',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/barcode-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::egK4faiQbek6AuXh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/get-product-barcode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gxROpIZeQwcjJkb4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product_store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product_update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => '/update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/search_tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search_tags',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/p(?|a(?|ssword/reset/([^/]++)(*:111)|yroll/([^/]++)(?|(*:136)|/edit(*:149)|(*:157)))|roducts/(?|saleunit/([^/]++)(*:195)|getdata/([^/]++)/([^/]++)(*:228)|product_warehouse/([^/]++)(*:262)|variant\\-data/([^/]++)(*:292)|([^/]++)(?|(*:311)|/edit(*:324)|(*:332)))|urchases/(?|product_purchase/([^/]++)(*:379)|getpayment/([^/]++)(*:406)|([^/]++)(?|(*:425)|/edit(*:438)|(*:446))))|/s(?|witch\\-theme/([^/]++)(*:483)|upplier/([^/]++)(?|(*:510)|/edit(*:523)|(*:531))|ales/(?|p(?|roduct_sale/([^/]++)(*:572)|aypalPaymentSuccess/([^/]++)(*:608))|ge(?|t(?|customergroup/([^/]++)(*:648)|p(?|roduct/([^/]++)(?|(*:678)|/([^/]++)(*:695))|ayment/([^/]++)(*:719)))|n_invoice/([^/]++)(*:747))|([^/]++)/create(*:771)|today\\-profit/([^/]++)(*:801)|([^/]++)(?|(*:820)|/edit(*:833)|(*:841)))|etting/general_setting/change\\-theme/([^/]++)(*:896)|tock\\-count/(?|([^/]++)(?|(*:930)|/edit(*:943)|(*:951))|finalize(*:968)|stockdif/([^/]++)(*:993)|([^/]++)/qty_adjustment(*:1024)))|/d(?|ashboard\\-filter/([^/]++)/([^/]++)(*:1074)|iscount(?|\\-plans/([^/]++)(?|(*:1112)|/edit(*:1126)|(*:1135))|s/(?|([^/]++)(?|(*:1161)|/edit(*:1175)|(*:1184))|product\\-search/([^/]++)(*:1218)))|e(?|livery/(?|product_delivery/([^/]++)(*:1268)|create/([^/]++)(*:1292)|([^/]++)/edit(*:1314)|delete/([^/]++)(*:1338))|partments/([^/]++)(?|(*:1369)|/edit(*:1383)|(*:1392))))|/c(?|heck\\-batch\\-availability/([^/]++)/([^/]++)/([^/]++)(*:1461)|a(?|tegory/([^/]++)(?|(*:1492)|/edit(*:1506)|(*:1515))|sh\\-register/(?|check\\-availability/([^/]++)(*:1569)|getDetails/([^/]++)(*:1597)|showDetails/([^/]++)(*:1626)))|u(?|stom(?|er(?|_group/([^/]++)(?|(*:1671)|/edit(*:1685)|(*:1694))|/(?|getDeposit/([^/]++)(*:1727)|([^/]++)(?|(*:1747)|/edit(*:1761)|(*:1770))))|\\-fields/([^/]++)(?|(*:1802)|/edit(*:1816)|(*:1825)))|rrency/([^/]++)(?|(*:1854)|/edit(*:1868)|(*:1877)))|oupons/([^/]++)(?|(*:1906)|/edit(*:1920)|(*:1929)))|/language_switch/([^/]++)(*:1965)|/r(?|ole/(?|permission/([^/]++)(*:2005)|([^/]++)(?|(*:2025)|/edit(*:2039)|(*:2048)))|e(?|turn\\-(?|sale/(?|get(?|customergroup/([^/]++)(*:2108)|product/([^/]++)(*:2133))|product_return/([^/]++)(*:2166)|([^/]++)(?|(*:2186)|/edit(*:2200)|(*:2209)))|purchase/(?|get(?|customergroup/([^/]++)(*:2260)|product/([^/]++)(*:2285))|product_return/([^/]++)(*:2318)|([^/]++)(?|(*:2338)|/edit(*:2352)|(*:2361))))|port/(?|daily_(?|sale/([^/]++)/([^/]++)(?|(*:2415))|purchase/([^/]++)/([^/]++)(?|(*:2454)))|monthly_(?|sale/([^/]++)(?|(*:2492))|purchase/([^/]++)(?|(*:2522))))))|/u(?|nit/([^/]++)(?|(*:2556)|/edit(*:2570)|(*:2579))|ser/(?|profile/([^/]++)(*:2612)|update_profile/([^/]++)(*:2644)|changepass/([^/]++)(*:2672)|([^/]++)(?|(*:2692)|/edit(*:2706)|(*:2715))))|/b(?|rand/([^/]++)(?|(*:2748)|/edit(*:2762)|(*:2771))|iller/([^/]++)(?|(*:2798)|/edit(*:2812)|(*:2821)))|/warehouse/([^/]++)(?|(*:2854)|/edit(*:2868)|(*:2877))|/t(?|a(?|bles/([^/]++)(?|(*:2912)|/edit(*:2926)|(*:2935))|x/([^/]++)(?|(*:2958)|/edit(*:2972)|(*:2981)))|ransfers/(?|product_transfer/([^/]++)(*:3029)|getproduct/([^/]++)(*:3057)|([^/]++)(?|(*:3077)|/edit(*:3091)|(*:3100))))|/q(?|uotations/(?|product_quotation/([^/]++)(*:3156)|get(?|customergroup/([^/]++)(*:3193)|product/([^/]++)(*:3218))|([^/]++)(?|/(?|create_(?|sale(*:3257)|purchase(*:3274))|edit(*:3288))|(*:3298)))|ty_adjustment/(?|getproduct/([^/]++)(*:3345)|([^/]++)(?|(*:3365)|/edit(*:3379)|(*:3388))))|/e(?|xpense(?|_categories/([^/]++)(?|(*:3437)|/edit(*:3451)|(*:3460))|s/([^/]++)(?|(*:3483)|/edit(*:3497)|(*:3506)))|mployees/([^/]++)(?|(*:3537)|/edit(*:3551)|(*:3560)))|/gift_cards/(?|recharge/([^/]++)(*:3603)|([^/]++)(?|(*:3623)|/edit(*:3637)|(*:3646)))|/a(?|ccounts/(?|make\\-default/([^/]++)(*:3695)|([^/]++)(?|(*:3715)|/edit(*:3729)|(*:3738)))|ttendance/([^/]++)(?|(*:3770)|/edit(*:3784)|(*:3793))|pprove\\-holiday/([^/]++)(*:3827))|/m(?|oney\\-transfers/([^/]++)(?|(*:3869)|/edit(*:3883)|(*:3892))|y\\-transactions/([^/]++)/([^/]++)(*:3935))|/holidays/(?|my\\-holiday/([^/]++)/([^/]++)(*:3987)|([^/]++)(?|(*:4007)|/edit(*:4021)|(*:4030))))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      111 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.show',
          ),
          1 => 
          array (
            0 => 'payroll',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.edit',
          ),
          1 => 
          array (
            0 => 'payroll',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.update',
          ),
          1 => 
          array (
            0 => 'payroll',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'payroll.destroy',
          ),
          1 => 
          array (
            0 => 'payroll',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      195 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rXFucSitKSZCOZDO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZAdtlOtvht4qZQKQ',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'variant_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      262 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vu1EhfnGaoxcrWOL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xUfIzLpRqQtjF1N2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.edit',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      332 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6LQ6LZNleBuLBwSY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchase.get-payment',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.show',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.edit',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.update',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'purchases.destroy',
          ),
          1 => 
          array (
            0 => 'purchase',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      483 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'switchTheme',
          ),
          1 => 
          array (
            0 => 'theme',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.show',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      523 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.edit',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      531 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.update',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'supplier.destroy',
          ),
          1 => 
          array (
            0 => 'supplier',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      572 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xnt45ceoBimXthvW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      608 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::opI9xuJznNkSsodP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.getcustomergroup',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.getproduct',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5APAO43miwww6EbF',
          ),
          1 => 
          array (
            0 => 'category_id',
            1 => 'brand_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.get-payment',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.invoice',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sale.draft',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9NwfGRAnjpquSL9M',
          ),
          1 => 
          array (
            0 => 'warehouse_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      820 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.show',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      833 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.edit',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sales.update',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'sales.destroy',
          ),
          1 => 
          array (
            0 => 'sale',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iKypQRlF1JTjtxYX',
          ),
          1 => 
          array (
            0 => 'theme',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      930 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-count.show',
          ),
          1 => 
          array (
            0 => 'stock_count',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      943 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-count.edit',
          ),
          1 => 
          array (
            0 => 'stock_count',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-count.update',
          ),
          1 => 
          array (
            0 => 'stock_count',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'stock-count.destroy',
          ),
          1 => 
          array (
            0 => 'stock_count',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      968 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-count.finalize',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      993 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H07ej1VuK6X8uI8G',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1024 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stock-count.adjustment',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DW5YG0LzssFaQggB',
          ),
          1 => 
          array (
            0 => 'start_date',
            1 => 'end_date',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount-plans.show',
          ),
          1 => 
          array (
            0 => 'discount_plan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount-plans.edit',
          ),
          1 => 
          array (
            0 => 'discount_plan',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1135 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discount-plans.update',
          ),
          1 => 
          array (
            0 => 'discount_plan',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'discount-plans.destroy',
          ),
          1 => 
          array (
            0 => 'discount_plan',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discounts.show',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discounts.edit',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1184 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'discounts.update',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'discounts.destroy',
          ),
          1 => 
          array (
            0 => 'discount',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t8IkKk9nVhqFsccs',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1268 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x6TdsHjQGsmQuVgj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NuX4PxbUCQR7Tb1u',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::09zvnuK7qlof4c1H',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1338 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1369 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.show',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1383 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.edit',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departments.update',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'departments.destroy',
          ),
          1 => 
          array (
            0 => 'department',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G6A4s4dZ2xmgO2Nn',
          ),
          1 => 
          array (
            0 => 'product_id',
            1 => 'batch_no',
            2 => 'warehouse_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.show',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.edit',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'category.update',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'category.destroy',
          ),
          1 => 
          array (
            0 => 'category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cashRegister.checkAvailability',
          ),
          1 => 
          array (
            0 => 'warehouse_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NDlV3xF8Irr9tvBy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1626 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wcexryiYx5FKrBfg',
          ),
          1 => 
          array (
            0 => 'warehouse_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1671 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer_group.show',
          ),
          1 => 
          array (
            0 => 'customer_group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1685 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer_group.edit',
          ),
          1 => 
          array (
            0 => 'customer_group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer_group.update',
          ),
          1 => 
          array (
            0 => 'customer_group',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer_group.destroy',
          ),
          1 => 
          array (
            0 => 'customer_group',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1727 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BTPAiUePmzHZzPgy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.show',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1761 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.edit',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1770 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'customer.update',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'customer.destroy',
          ),
          1 => 
          array (
            0 => 'customer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1802 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-fields.show',
          ),
          1 => 
          array (
            0 => 'custom_field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-fields.edit',
          ),
          1 => 
          array (
            0 => 'custom_field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'custom-fields.update',
          ),
          1 => 
          array (
            0 => 'custom_field',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'custom-fields.destroy',
          ),
          1 => 
          array (
            0 => 'custom_field',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currency.show',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currency.edit',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currency.update',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'currency.destroy',
          ),
          1 => 
          array (
            0 => 'currency',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1906 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.show',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1920 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.edit',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1929 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.update',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'coupons.destroy',
          ),
          1 => 
          array (
            0 => 'coupon',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1965 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QPQ4COS56ziJgjbS',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.permission',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2025 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.show',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2039 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.edit',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2048 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'role.update',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'role.destroy',
          ),
          1 => 
          array (
            0 => 'role',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-sale.getcustomergroup',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-sale.getproduct',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::azRlcC5N6nMLQTz7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-sale.show',
          ),
          1 => 
          array (
            0 => 'return_sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-sale.edit',
          ),
          1 => 
          array (
            0 => 'return_sale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-sale.update',
          ),
          1 => 
          array (
            0 => 'return_sale',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'return-sale.destroy',
          ),
          1 => 
          array (
            0 => 'return_sale',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-purchase.getcustomergroup',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-purchase.getproduct',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2318 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wSqVOfK5TfVBoNzM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2338 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-purchase.show',
          ),
          1 => 
          array (
            0 => 'return_purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2352 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-purchase.edit',
          ),
          1 => 
          array (
            0 => 'return_purchase',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'return-purchase.update',
          ),
          1 => 
          array (
            0 => 'return_purchase',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'return-purchase.destroy',
          ),
          1 => 
          array (
            0 => 'return_purchase',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::90W27S9paLzDh1SN',
          ),
          1 => 
          array (
            0 => 'year',
            1 => 'month',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'report.dailySaleByWarehouse',
          ),
          1 => 
          array (
            0 => 'year',
            1 => 'month',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0VTas6xCyOpIQEeF',
          ),
          1 => 
          array (
            0 => 'year',
            1 => 'month',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'report.dailyPurchaseByWarehouse',
          ),
          1 => 
          array (
            0 => 'year',
            1 => 'month',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N46WysZkQx5A6Pjz',
          ),
          1 => 
          array (
            0 => 'year',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'report.monthlySaleByWarehouse',
          ),
          1 => 
          array (
            0 => 'year',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DDYjYmemVUduiuAL',
          ),
          1 => 
          array (
            0 => 'year',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'report.monthlyPurchaseByWarehouse',
          ),
          1 => 
          array (
            0 => 'year',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2556 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.show',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.edit',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2579 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'unit.update',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'unit.destroy',
          ),
          1 => 
          array (
            0 => 'unit',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2612 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profileUpdate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2672 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.password',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2692 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2706 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2748 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.show',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2762 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.edit',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'brand.update',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'brand.destroy',
          ),
          1 => 
          array (
            0 => 'brand',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.show',
          ),
          1 => 
          array (
            0 => 'biller',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.edit',
          ),
          1 => 
          array (
            0 => 'biller',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2821 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'biller.update',
          ),
          1 => 
          array (
            0 => 'biller',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'biller.destroy',
          ),
          1 => 
          array (
            0 => 'biller',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2854 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouse.show',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouse.edit',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'warehouse.update',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'warehouse.destroy',
          ),
          1 => 
          array (
            0 => 'warehouse',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2912 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.show',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2926 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.edit',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2935 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tables.update',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tables.destroy',
          ),
          1 => 
          array (
            0 => 'table',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax.show',
          ),
          1 => 
          array (
            0 => 'tax',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax.edit',
          ),
          1 => 
          array (
            0 => 'tax',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2981 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tax.update',
          ),
          1 => 
          array (
            0 => 'tax',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'tax.destroy',
          ),
          1 => 
          array (
            0 => 'tax',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E6ceDKabICYsRYRM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3057 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfer.getproduct',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3077 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.show',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.edit',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3100 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.update',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'transfers.destroy',
          ),
          1 => 
          array (
            0 => 'transfer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qodWToDJpFDDT4U5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotation.getcustomergroup',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3218 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotation.getproduct',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotation.create_sale',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotation.create_purchase',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.edit',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3298 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.show',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.update',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'quotations.destroy',
          ),
          1 => 
          array (
            0 => 'quotation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'adjustment.getproduct',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'qty_adjustment.show',
          ),
          1 => 
          array (
            0 => 'qty_adjustment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3379 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'qty_adjustment.edit',
          ),
          1 => 
          array (
            0 => 'qty_adjustment',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'qty_adjustment.update',
          ),
          1 => 
          array (
            0 => 'qty_adjustment',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'qty_adjustment.destroy',
          ),
          1 => 
          array (
            0 => 'qty_adjustment',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense_categories.show',
          ),
          1 => 
          array (
            0 => 'expense_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3451 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense_categories.edit',
          ),
          1 => 
          array (
            0 => 'expense_category',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expense_categories.update',
          ),
          1 => 
          array (
            0 => 'expense_category',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'expense_categories.destroy',
          ),
          1 => 
          array (
            0 => 'expense_category',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3483 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.show',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3497 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.edit',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3506 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.update',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'expenses.destroy',
          ),
          1 => 
          array (
            0 => 'expense',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.show',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.edit',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3560 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'employees.update',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'employees.destroy',
          ),
          1 => 
          array (
            0 => 'employee',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3603 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gift_cards.recharge',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gift_cards.show',
          ),
          1 => 
          array (
            0 => 'gift_card',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gift_cards.edit',
          ),
          1 => 
          array (
            0 => 'gift_card',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3646 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gift_cards.update',
          ),
          1 => 
          array (
            0 => 'gift_card',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'gift_cards.destroy',
          ),
          1 => 
          array (
            0 => 'gift_card',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3695 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::75ZITEUZvw3TEmls',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.show',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.edit',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3738 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.update',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.destroy',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3770 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendance.show',
          ),
          1 => 
          array (
            0 => 'attendance',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendance.edit',
          ),
          1 => 
          array (
            0 => 'attendance',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'attendance.update',
          ),
          1 => 
          array (
            0 => 'attendance',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'attendance.destroy',
          ),
          1 => 
          array (
            0 => 'attendance',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'approveHoliday',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3869 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'money-transfers.show',
          ),
          1 => 
          array (
            0 => 'money_transfer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'money-transfers.edit',
          ),
          1 => 
          array (
            0 => 'money_transfer',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'money-transfers.update',
          ),
          1 => 
          array (
            0 => 'money_transfer',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'money-transfers.destroy',
          ),
          1 => 
          array (
            0 => 'money_transfer',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3935 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o0Pyq9oUWgItmFhK',
          ),
          1 => 
          array (
            0 => 'year',
            1 => 'month',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3987 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'myHoliday',
          ),
          1 => 
          array (
            0 => 'year',
            1 => 'month',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4007 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'holidays.show',
          ),
          1 => 
          array (
            0 => 'holiday',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      4021 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'holidays.edit',
          ),
          1 => 
          array (
            0 => 'holiday',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      4030 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'holidays.update',
          ),
          1 => 
          array (
            0 => 'holiday',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'holidays.destroy',
          ),
          1 => 
          array (
            0 => 'holiday',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fetch-data-general' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fetch-data-general',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\DemoAutoUpdateController@fetchDataGeneral',
        'controller' => 'App\\Http\\Controllers\\DemoAutoUpdateController@fetchDataGeneral',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'fetch-data-general',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'data-read' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fetch-data-upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\DemoAutoUpdateController@fetchDataForAutoUpgrade',
        'controller' => 'App\\Http\\Controllers\\DemoAutoUpdateController@fetchDataForAutoUpgrade',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'data-read',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fetch-data-bugs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fetch-data-bugs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\DemoAutoUpdateController@fetchDataForBugs',
        'controller' => 'App\\Http\\Controllers\\DemoAutoUpdateController@fetchDataForBugs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'fetch-data-bugs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::68o9Qn5yvet3td54' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'migrate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\LandingPageController@migrateDB',
        'controller' => 'App\\Http\\Controllers\\App\\Http\\Controllers\\LandingPageController@migrateDB',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::68o9Qn5yvet3td54',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CIS6dFQeC1FoFmgH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:1025:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:806:"function() {
    \\Artisan::call(\'optimize:clear\');
    \\cache()->forget(\'biller_list\');
    \\cache()->forget(\'brand_list\');
    \\cache()->forget(\'category_list\');
    \\cache()->forget(\'coupon_list\');
    \\cache()->forget(\'customer_list\');
    \\cache()->forget(\'customer_group_list\');
    \\cache()->forget(\'product_list\');
    \\cache()->forget(\'product_list_with_variant\');
    \\cache()->forget(\'warehouse_list\');
    \\cache()->forget(\'table_list\');
    \\cache()->forget(\'tax_list\');
    \\cache()->forget(\'currency\');
    \\cache()->forget(\'general_setting\');
    \\cache()->forget(\'pos_setting\');
    \\cache()->forget(\'user_role\');
    \\cache()->forget(\'permissions\');
    \\cache()->forget(\'role_has_permissions\');
    \\cache()->forget(\'role_has_permissions_list\');
    \\dd(\'cleared\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000074f8567c000000006a281d75";}";s:4:"hash";s:44:"JOcGpyL4bbVYkem5JqddLFmsse/WV2BgxDTHQjrqoAg=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CIS6dFQeC1FoFmgH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pPoNIW806qOiBZGp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'addon-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@addonList',
        'controller' => 'App\\Http\\Controllers\\HomeController@addonList',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pPoNIW806qOiBZGp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d102dDjXbeuTTf9c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update-coupon',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CouponController@updateCoupon',
        'controller' => 'App\\Http\\Controllers\\CouponController@updateCoupon',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::d102dDjXbeuTTf9c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auto-update-dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\DashboardController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'developer-section.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'developer-section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DeveloperSectionController@index',
        'controller' => 'App\\Http\\Controllers\\DeveloperSectionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/developer-section',
        'where' => 
        array (
        ),
        'as' => 'developer-section.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'developer-section.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'developer-section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DeveloperSectionController@submit',
        'controller' => 'App\\Http\\Controllers\\DeveloperSectionController@submit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/developer-section',
        'where' => 
        array (
        ),
        'as' => 'developer-section.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bug-update-setting.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'developer-section/bug-update-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DeveloperSectionController@bugUpdateSetting',
        'controller' => 'App\\Http\\Controllers\\DeveloperSectionController@bugUpdateSetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/developer-section',
        'where' => 
        array (
        ),
        'as' => 'bug-update-setting.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'version-upgrade-setting.submit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'developer-section/version-upgrade-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\DeveloperSectionController@versionUpgradeSetting',
        'controller' => 'App\\Http\\Controllers\\DeveloperSectionController@versionUpgradeSetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/developer-section',
        'where' => 
        array (
        ),
        'as' => 'version-upgrade-setting.submit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'new-release' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'new-release',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientAutoUpdateController@newVersionReleasePage',
        'controller' => 'App\\Http\\Controllers\\ClientAutoUpdateController@newVersionReleasePage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'new-release',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bug-update-page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bugs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientAutoUpdateController@bugUpdatePage',
        'controller' => 'App\\Http\\Controllers\\ClientAutoUpdateController@bugUpdatePage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bug-update-page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'version-upgrade' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'version-upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientAutoUpdateController@versionUpgrade',
        'controller' => 'App\\Http\\Controllers\\ClientAutoUpdateController@versionUpgrade',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'version-upgrade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bug-update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'bug-update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ClientAutoUpdateController@bugUpdate',
        'controller' => 'App\\Http\\Controllers\\ClientAutoUpdateController@bugUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bug-update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WfizUxEvZwlhdWqe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WfizUxEvZwlhdWqe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9gu0GaWqx0ThB0Rn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9gu0GaWqx0ThB0Rn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WQQHCUnP0qJFPYHS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WQQHCUnP0qJFPYHS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tRbhD4wwbw6EYn1b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'documentation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@documentation',
        'controller' => 'App\\Http\\Controllers\\HomeController@documentation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tRbhD4wwbw6EYn1b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o4HxZIRLXGebqD0H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::o4HxZIRLXGebqD0H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IQWSrmsJWzBbQYmm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@dashboard',
        'controller' => 'App\\Http\\Controllers\\HomeController@dashboard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IQWSrmsJWzBbQYmm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ew0DdCU3ALvDr2b9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@home',
        'controller' => 'App\\Http\\Controllers\\HomeController@home',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Ew0DdCU3ALvDr2b9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xcHFbfFlwEZk686R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'yearly-best-selling-price',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@yearlyBestSellingPrice',
        'controller' => 'App\\Http\\Controllers\\HomeController@yearlyBestSellingPrice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xcHFbfFlwEZk686R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::beWreD6MVeuCfedK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'yearly-best-selling-qty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@yearlyBestSellingQty',
        'controller' => 'App\\Http\\Controllers\\HomeController@yearlyBestSellingQty',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::beWreD6MVeuCfedK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wuo89FHk4BSUSdz4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'monthly-best-selling-qty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@monthlyBestSellingQty',
        'controller' => 'App\\Http\\Controllers\\HomeController@monthlyBestSellingQty',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wuo89FHk4BSUSdz4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6cGZ3ztTyz2HILbn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recent-sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@recentSale',
        'controller' => 'App\\Http\\Controllers\\HomeController@recentSale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6cGZ3ztTyz2HILbn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::35TLZJQlbA5YR3Oq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recent-purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@recentPurchase',
        'controller' => 'App\\Http\\Controllers\\HomeController@recentPurchase',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::35TLZJQlbA5YR3Oq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WsYCZq3w7zgRZk5b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recent-quotation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@recentQuotation',
        'controller' => 'App\\Http\\Controllers\\HomeController@recentQuotation',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WsYCZq3w7zgRZk5b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kb365Cn7gm33D6vH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'recent-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@recentPayment',
        'controller' => 'App\\Http\\Controllers\\HomeController@recentPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Kb365Cn7gm33D6vH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'switchTheme' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'switch-theme/{theme}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@switchTheme',
        'controller' => 'App\\Http\\Controllers\\HomeController@switchTheme',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'switchTheme',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DW5YG0LzssFaQggB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard-filter/{start_date}/{end_date}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@dashboardFilter',
        'controller' => 'App\\Http\\Controllers\\HomeController@dashboardFilter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DW5YG0LzssFaQggB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G6A4s4dZ2xmgO2Nn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'check-batch-availability/{product_id}/{batch_no}/{warehouse_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@checkBatchAvailability',
        'controller' => 'App\\Http\\Controllers\\ProductController@checkBatchAvailability',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::G6A4s4dZ2xmgO2Nn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QPQ4COS56ziJgjbS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'language_switch/{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@switchLanguage',
        'controller' => 'App\\Http\\Controllers\\LanguageController@switchLanguage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QPQ4COS56ziJgjbS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'role.permission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'role/permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleController@permission',
        'controller' => 'App\\Http\\Controllers\\RoleController@permission',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'role.permission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'role.setPermission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'role/set_permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleController@setPermission',
        'controller' => 'App\\Http\\Controllers\\RoleController@setPermission',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'role.setPermission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'role.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'role.index',
        'uses' => 'App\\Http\\Controllers\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\RoleController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'role.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'role/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'role.create',
        'uses' => 'App\\Http\\Controllers\\RoleController@create',
        'controller' => 'App\\Http\\Controllers\\RoleController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'role.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'role.store',
        'uses' => 'App\\Http\\Controllers\\RoleController@store',
        'controller' => 'App\\Http\\Controllers\\RoleController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'role.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'role.show',
        'uses' => 'App\\Http\\Controllers\\RoleController@show',
        'controller' => 'App\\Http\\Controllers\\RoleController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'role.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'role/{role}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'role.edit',
        'uses' => 'App\\Http\\Controllers\\RoleController@edit',
        'controller' => 'App\\Http\\Controllers\\RoleController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'role.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'role.update',
        'uses' => 'App\\Http\\Controllers\\RoleController@update',
        'controller' => 'App\\Http\\Controllers\\RoleController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'role.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'role/{role}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'role.destroy',
        'uses' => 'App\\Http\\Controllers\\RoleController@destroy',
        'controller' => 'App\\Http\\Controllers\\RoleController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importunit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\UnitController@importUnit',
        'controller' => 'App\\Http\\Controllers\\UnitController@importUnit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'unit.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z4RrqEE6TkgyPf65' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'unit/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\UnitController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\UnitController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::z4RrqEE6TkgyPf65',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'unit/lims_unit_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\UnitController@limsUnitSearch',
        'controller' => 'App\\Http\\Controllers\\UnitController@limsUnitSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'unit.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'unit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'unit.index',
        'uses' => 'App\\Http\\Controllers\\UnitController@index',
        'controller' => 'App\\Http\\Controllers\\UnitController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'unit/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'unit.create',
        'uses' => 'App\\Http\\Controllers\\UnitController@create',
        'controller' => 'App\\Http\\Controllers\\UnitController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'unit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'unit.store',
        'uses' => 'App\\Http\\Controllers\\UnitController@store',
        'controller' => 'App\\Http\\Controllers\\UnitController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'unit/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'unit.show',
        'uses' => 'App\\Http\\Controllers\\UnitController@show',
        'controller' => 'App\\Http\\Controllers\\UnitController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'unit/{unit}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'unit.edit',
        'uses' => 'App\\Http\\Controllers\\UnitController@edit',
        'controller' => 'App\\Http\\Controllers\\UnitController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'unit/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'unit.update',
        'uses' => 'App\\Http\\Controllers\\UnitController@update',
        'controller' => 'App\\Http\\Controllers\\UnitController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'unit.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'unit/{unit}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'unit.destroy',
        'uses' => 'App\\Http\\Controllers\\UnitController@destroy',
        'controller' => 'App\\Http\\Controllers\\UnitController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'category/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@import',
        'controller' => 'App\\Http\\Controllers\\CategoryController@import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'category.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5sqPtlG51hPXr8wa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'category/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\CategoryController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5sqPtlG51hPXr8wa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1f3RckXF7bLxMOVa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'category/category-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@categoryData',
        'controller' => 'App\\Http\\Controllers\\CategoryController@categoryData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1f3RckXF7bLxMOVa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'category.index',
        'uses' => 'App\\Http\\Controllers\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\CategoryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'category.create',
        'uses' => 'App\\Http\\Controllers\\CategoryController@create',
        'controller' => 'App\\Http\\Controllers\\CategoryController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'category.store',
        'uses' => 'App\\Http\\Controllers\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\CategoryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'category.show',
        'uses' => 'App\\Http\\Controllers\\CategoryController@show',
        'controller' => 'App\\Http\\Controllers\\CategoryController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'category/{category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'category.edit',
        'uses' => 'App\\Http\\Controllers\\CategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\CategoryController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'category.update',
        'uses' => 'App\\Http\\Controllers\\CategoryController@update',
        'controller' => 'App\\Http\\Controllers\\CategoryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'category.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'category/{category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'category.destroy',
        'uses' => 'App\\Http\\Controllers\\CategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\CategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importbrand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@importBrand',
        'controller' => 'App\\Http\\Controllers\\BrandController@importBrand',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brand.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fdovxTtd4J93vK4l' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'brand/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\BrandController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fdovxTtd4J93vK4l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brand/lims_brand_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\BrandController@limsBrandSearch',
        'controller' => 'App\\Http\\Controllers\\BrandController@limsBrandSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'brand.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'brand.index',
        'uses' => 'App\\Http\\Controllers\\BrandController@index',
        'controller' => 'App\\Http\\Controllers\\BrandController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brand/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'brand.create',
        'uses' => 'App\\Http\\Controllers\\BrandController@create',
        'controller' => 'App\\Http\\Controllers\\BrandController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'brand',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'brand.store',
        'uses' => 'App\\Http\\Controllers\\BrandController@store',
        'controller' => 'App\\Http\\Controllers\\BrandController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brand/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'brand.show',
        'uses' => 'App\\Http\\Controllers\\BrandController@show',
        'controller' => 'App\\Http\\Controllers\\BrandController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'brand/{brand}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'brand.edit',
        'uses' => 'App\\Http\\Controllers\\BrandController@edit',
        'controller' => 'App\\Http\\Controllers\\BrandController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'brand/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'brand.update',
        'uses' => 'App\\Http\\Controllers\\BrandController@update',
        'controller' => 'App\\Http\\Controllers\\BrandController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'brand.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'brand/{brand}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'brand.destroy',
        'uses' => 'App\\Http\\Controllers\\BrandController@destroy',
        'controller' => 'App\\Http\\Controllers\\BrandController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supplier.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importsupplier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SupplierController@importSupplier',
        'controller' => 'App\\Http\\Controllers\\SupplierController@importSupplier',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'supplier.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7b46YXb6FdyEpVT1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'supplier/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SupplierController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\SupplierController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7b46YXb6FdyEpVT1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supplier.clearDue' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'suppliers/clear-due',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SupplierController@clearDue',
        'controller' => 'App\\Http\\Controllers\\SupplierController@clearDue',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'supplier.clearDue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supplier.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'supplier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'supplier.index',
        'uses' => 'App\\Http\\Controllers\\SupplierController@index',
        'controller' => 'App\\Http\\Controllers\\SupplierController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supplier.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'supplier/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'supplier.create',
        'uses' => 'App\\Http\\Controllers\\SupplierController@create',
        'controller' => 'App\\Http\\Controllers\\SupplierController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supplier.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'supplier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'supplier.store',
        'uses' => 'App\\Http\\Controllers\\SupplierController@store',
        'controller' => 'App\\Http\\Controllers\\SupplierController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supplier.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'supplier/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'supplier.show',
        'uses' => 'App\\Http\\Controllers\\SupplierController@show',
        'controller' => 'App\\Http\\Controllers\\SupplierController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supplier.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'supplier/{supplier}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'supplier.edit',
        'uses' => 'App\\Http\\Controllers\\SupplierController@edit',
        'controller' => 'App\\Http\\Controllers\\SupplierController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supplier.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'supplier/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'supplier.update',
        'uses' => 'App\\Http\\Controllers\\SupplierController@update',
        'controller' => 'App\\Http\\Controllers\\SupplierController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'supplier.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'supplier/{supplier}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'supplier.destroy',
        'uses' => 'App\\Http\\Controllers\\SupplierController@destroy',
        'controller' => 'App\\Http\\Controllers\\SupplierController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouse.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importwarehouse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\WarehouseController@importWarehouse',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@importWarehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'warehouse.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pdg29qMeU8lPyz3u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'warehouse/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\WarehouseController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Pdg29qMeU8lPyz3u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouse.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warehouse/lims_warehouse_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\WarehouseController@limsWarehouseSearch',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@limsWarehouseSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'warehouse.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouse.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warehouse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'warehouse.index',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@index',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouse.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warehouse/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'warehouse.create',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@create',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouse.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'warehouse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'warehouse.store',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@store',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouse.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warehouse/{warehouse}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'warehouse.show',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@show',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouse.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'warehouse/{warehouse}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'warehouse.edit',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@edit',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouse.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'warehouse/{warehouse}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'warehouse.update',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@update',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'warehouse.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'warehouse/{warehouse}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'warehouse.destroy',
        'uses' => 'App\\Http\\Controllers\\WarehouseController@destroy',
        'controller' => 'App\\Http\\Controllers\\WarehouseController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tables.index',
        'uses' => 'App\\Http\\Controllers\\TableController@index',
        'controller' => 'App\\Http\\Controllers\\TableController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tables/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tables.create',
        'uses' => 'App\\Http\\Controllers\\TableController@create',
        'controller' => 'App\\Http\\Controllers\\TableController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tables',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tables.store',
        'uses' => 'App\\Http\\Controllers\\TableController@store',
        'controller' => 'App\\Http\\Controllers\\TableController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tables/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tables.show',
        'uses' => 'App\\Http\\Controllers\\TableController@show',
        'controller' => 'App\\Http\\Controllers\\TableController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tables/{table}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tables.edit',
        'uses' => 'App\\Http\\Controllers\\TableController@edit',
        'controller' => 'App\\Http\\Controllers\\TableController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'tables/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tables.update',
        'uses' => 'App\\Http\\Controllers\\TableController@update',
        'controller' => 'App\\Http\\Controllers\\TableController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tables.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'tables/{table}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tables.destroy',
        'uses' => 'App\\Http\\Controllers\\TableController@destroy',
        'controller' => 'App\\Http\\Controllers\\TableController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importtax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\TaxController@importTax',
        'controller' => 'App\\Http\\Controllers\\TaxController@importTax',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tax.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y8qx0R0A5OslC2jN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tax/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\TaxController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\TaxController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::y8qx0R0A5OslC2jN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax/lims_tax_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\TaxController@limsTaxSearch',
        'controller' => 'App\\Http\\Controllers\\TaxController@limsTaxSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tax.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tax.index',
        'uses' => 'App\\Http\\Controllers\\TaxController@index',
        'controller' => 'App\\Http\\Controllers\\TaxController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tax.create',
        'uses' => 'App\\Http\\Controllers\\TaxController@create',
        'controller' => 'App\\Http\\Controllers\\TaxController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'tax',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tax.store',
        'uses' => 'App\\Http\\Controllers\\TaxController@store',
        'controller' => 'App\\Http\\Controllers\\TaxController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax/{tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tax.show',
        'uses' => 'App\\Http\\Controllers\\TaxController@show',
        'controller' => 'App\\Http\\Controllers\\TaxController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tax/{tax}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tax.edit',
        'uses' => 'App\\Http\\Controllers\\TaxController@edit',
        'controller' => 'App\\Http\\Controllers\\TaxController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'tax/{tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tax.update',
        'uses' => 'App\\Http\\Controllers\\TaxController@update',
        'controller' => 'App\\Http\\Controllers\\TaxController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tax.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'tax/{tax}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'tax.destroy',
        'uses' => 'App\\Http\\Controllers\\TaxController@destroy',
        'controller' => 'App\\Http\\Controllers\\TaxController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.product-data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/product-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@productData',
        'controller' => 'App\\Http\\Controllers\\ProductController@productData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'products.product-data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fel9URKD1ubVf1H9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/gencode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@generateCode',
        'controller' => 'App\\Http\\Controllers\\ProductController@generateCode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Fel9URKD1ubVf1H9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pW15fN6x4LM10HM4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@search',
        'controller' => 'App\\Http\\Controllers\\ProductController@search',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::pW15fN6x4LM10HM4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rXFucSitKSZCOZDO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/saleunit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@saleUnit',
        'controller' => 'App\\Http\\Controllers\\ProductController@saleUnit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rXFucSitKSZCOZDO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZAdtlOtvht4qZQKQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/getdata/{id}/{variant_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@getData',
        'controller' => 'App\\Http\\Controllers\\ProductController@getData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZAdtlOtvht4qZQKQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vu1EhfnGaoxcrWOL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/product_warehouse/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@productWarehouseData',
        'controller' => 'App\\Http\\Controllers\\ProductController@productWarehouseData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Vu1EhfnGaoxcrWOL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importproduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@importProduct',
        'controller' => 'App\\Http\\Controllers\\ProductController@importProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.export' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'exportproduct',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@exportProduct',
        'controller' => 'App\\Http\\Controllers\\ProductController@exportProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.export',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.printBarcode' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/print_barcode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@printBarcode',
        'controller' => 'App\\Http\\Controllers\\ProductController@printBarcode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.printBarcode',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/lims_product_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@limsProductSearch',
        'controller' => 'App\\Http\\Controllers\\ProductController@limsProductSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::17qJf6UHCJXot1Cb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\ProductController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::17qJf6UHCJXot1Cb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r89A3UGyssU1rMDd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@updateProduct',
        'controller' => 'App\\Http\\Controllers\\ProductController@updateProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::r89A3UGyssU1rMDd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xUfIzLpRqQtjF1N2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/variant-data/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@variantData',
        'controller' => 'App\\Http\\Controllers\\ProductController@variantData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xUfIzLpRqQtjF1N2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@history',
        'controller' => 'App\\Http\\Controllers\\ProductController@history',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'products.history',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gIWHgCSldLofM1aF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/sale-history-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@saleHistoryData',
        'controller' => 'App\\Http\\Controllers\\ProductController@saleHistoryData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gIWHgCSldLofM1aF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AabvalR2tEHxugJC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/purchase-history-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@purchaseHistoryData',
        'controller' => 'App\\Http\\Controllers\\ProductController@purchaseHistoryData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AabvalR2tEHxugJC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9ar2O0YM9ZxJCzdG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/sale-return-history-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@saleReturnHistoryData',
        'controller' => 'App\\Http\\Controllers\\ProductController@saleReturnHistoryData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9ar2O0YM9ZxJCzdG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7TVex4GIzVRgQEqa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products/purchase-return-history-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@purchaseReturnHistoryData',
        'controller' => 'App\\Http\\Controllers\\ProductController@purchaseReturnHistoryData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7TVex4GIzVRgQEqa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'products.index',
        'uses' => 'App\\Http\\Controllers\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\ProductController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'products.create',
        'uses' => 'App\\Http\\Controllers\\ProductController@create',
        'controller' => 'App\\Http\\Controllers\\ProductController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'products.store',
        'uses' => 'App\\Http\\Controllers\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\ProductController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'products.show',
        'uses' => 'App\\Http\\Controllers\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\ProductController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'products/{product}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'products.edit',
        'uses' => 'App\\Http\\Controllers\\ProductController@edit',
        'controller' => 'App\\Http\\Controllers\\ProductController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'products.update',
        'uses' => 'App\\Http\\Controllers\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\ProductController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'products.destroy',
        'uses' => 'App\\Http\\Controllers\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProductController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer_group.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importcustomer_group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@importCustomerGroup',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@importCustomerGroup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer_group.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ts118PgH5z1Els9N' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer_group/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ts118PgH5z1Els9N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer_group.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer_group/lims_customer_group_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@limsCustomerGroupSearch',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@limsCustomerGroupSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer_group.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer_group.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer_group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer_group.index',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@index',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer_group.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer_group/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer_group.create',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@create',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer_group.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer_group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer_group.store',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@store',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer_group.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer_group/{customer_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer_group.show',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@show',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer_group.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer_group/{customer_group}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer_group.edit',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@edit',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer_group.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'customer_group/{customer_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer_group.update',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@update',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer_group.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer_group/{customer_group}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer_group.destroy',
        'uses' => 'App\\Http\\Controllers\\CustomerGroupController@destroy',
        'controller' => 'App\\Http\\Controllers\\CustomerGroupController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount-plans.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discount-plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discount-plans.index',
        'uses' => 'App\\Http\\Controllers\\DiscountPlanController@index',
        'controller' => 'App\\Http\\Controllers\\DiscountPlanController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount-plans.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discount-plans/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discount-plans.create',
        'uses' => 'App\\Http\\Controllers\\DiscountPlanController@create',
        'controller' => 'App\\Http\\Controllers\\DiscountPlanController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount-plans.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'discount-plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discount-plans.store',
        'uses' => 'App\\Http\\Controllers\\DiscountPlanController@store',
        'controller' => 'App\\Http\\Controllers\\DiscountPlanController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount-plans.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discount-plans/{discount_plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discount-plans.show',
        'uses' => 'App\\Http\\Controllers\\DiscountPlanController@show',
        'controller' => 'App\\Http\\Controllers\\DiscountPlanController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount-plans.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discount-plans/{discount_plan}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discount-plans.edit',
        'uses' => 'App\\Http\\Controllers\\DiscountPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\DiscountPlanController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount-plans.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'discount-plans/{discount_plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discount-plans.update',
        'uses' => 'App\\Http\\Controllers\\DiscountPlanController@update',
        'controller' => 'App\\Http\\Controllers\\DiscountPlanController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discount-plans.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'discount-plans/{discount_plan}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discount-plans.destroy',
        'uses' => 'App\\Http\\Controllers\\DiscountPlanController@destroy',
        'controller' => 'App\\Http\\Controllers\\DiscountPlanController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discounts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discounts.index',
        'uses' => 'App\\Http\\Controllers\\DiscountController@index',
        'controller' => 'App\\Http\\Controllers\\DiscountController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discounts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discounts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discounts.create',
        'uses' => 'App\\Http\\Controllers\\DiscountController@create',
        'controller' => 'App\\Http\\Controllers\\DiscountController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discounts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'discounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discounts.store',
        'uses' => 'App\\Http\\Controllers\\DiscountController@store',
        'controller' => 'App\\Http\\Controllers\\DiscountController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discounts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discounts/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discounts.show',
        'uses' => 'App\\Http\\Controllers\\DiscountController@show',
        'controller' => 'App\\Http\\Controllers\\DiscountController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discounts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discounts/{discount}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discounts.edit',
        'uses' => 'App\\Http\\Controllers\\DiscountController@edit',
        'controller' => 'App\\Http\\Controllers\\DiscountController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discounts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'discounts/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discounts.update',
        'uses' => 'App\\Http\\Controllers\\DiscountController@update',
        'controller' => 'App\\Http\\Controllers\\DiscountController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'discounts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'discounts/{discount}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'discounts.destroy',
        'uses' => 'App\\Http\\Controllers\\DiscountController@destroy',
        'controller' => 'App\\Http\\Controllers\\DiscountController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t8IkKk9nVhqFsccs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'discounts/product-search/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\DiscountController@productSearch',
        'controller' => 'App\\Http\\Controllers\\DiscountController@productSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::t8IkKk9nVhqFsccs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importcustomer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@importCustomer',
        'controller' => 'App\\Http\\Controllers\\CustomerController@importCustomer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BTPAiUePmzHZzPgy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/getDeposit/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@getDeposit',
        'controller' => 'App\\Http\\Controllers\\CustomerController@getDeposit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BTPAiUePmzHZzPgy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.addDeposit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/add_deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@addDeposit',
        'controller' => 'App\\Http\\Controllers\\CustomerController@addDeposit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.addDeposit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.updateDeposit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/update_deposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@updateDeposit',
        'controller' => 'App\\Http\\Controllers\\CustomerController@updateDeposit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.updateDeposit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.deleteDeposit' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/deleteDeposit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@deleteDeposit',
        'controller' => 'App\\Http\\Controllers\\CustomerController@deleteDeposit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.deleteDeposit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7WCZdrq6lphDb8pn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\CustomerController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7WCZdrq6lphDb8pn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/lims_customer_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@limsCustomerSearch',
        'controller' => 'App\\Http\\Controllers\\CustomerController@limsCustomerSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.clearDue' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customers/clear-due',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CustomerController@clearDue',
        'controller' => 'App\\Http\\Controllers\\CustomerController@clearDue',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'customer.clearDue',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer.index',
        'uses' => 'App\\Http\\Controllers\\CustomerController@index',
        'controller' => 'App\\Http\\Controllers\\CustomerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer.create',
        'uses' => 'App\\Http\\Controllers\\CustomerController@create',
        'controller' => 'App\\Http\\Controllers\\CustomerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'customer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer.store',
        'uses' => 'App\\Http\\Controllers\\CustomerController@store',
        'controller' => 'App\\Http\\Controllers\\CustomerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer.show',
        'uses' => 'App\\Http\\Controllers\\CustomerController@show',
        'controller' => 'App\\Http\\Controllers\\CustomerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'customer/{customer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer.edit',
        'uses' => 'App\\Http\\Controllers\\CustomerController@edit',
        'controller' => 'App\\Http\\Controllers\\CustomerController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer.update',
        'uses' => 'App\\Http\\Controllers\\CustomerController@update',
        'controller' => 'App\\Http\\Controllers\\CustomerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'customer.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'customer/{customer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'customer.destroy',
        'uses' => 'App\\Http\\Controllers\\CustomerController@destroy',
        'controller' => 'App\\Http\\Controllers\\CustomerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importbiller',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\BillerController@importBiller',
        'controller' => 'App\\Http\\Controllers\\BillerController@importBiller',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'biller.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IzTcRzJthzxEZvVn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'biller/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\BillerController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\BillerController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IzTcRzJthzxEZvVn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'biller/lims_biller_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\BillerController@limsBillerSearch',
        'controller' => 'App\\Http\\Controllers\\BillerController@limsBillerSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'biller.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'biller',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'biller.index',
        'uses' => 'App\\Http\\Controllers\\BillerController@index',
        'controller' => 'App\\Http\\Controllers\\BillerController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'biller/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'biller.create',
        'uses' => 'App\\Http\\Controllers\\BillerController@create',
        'controller' => 'App\\Http\\Controllers\\BillerController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'biller',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'biller.store',
        'uses' => 'App\\Http\\Controllers\\BillerController@store',
        'controller' => 'App\\Http\\Controllers\\BillerController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'biller/{biller}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'biller.show',
        'uses' => 'App\\Http\\Controllers\\BillerController@show',
        'controller' => 'App\\Http\\Controllers\\BillerController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'biller/{biller}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'biller.edit',
        'uses' => 'App\\Http\\Controllers\\BillerController@edit',
        'controller' => 'App\\Http\\Controllers\\BillerController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'biller/{biller}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'biller.update',
        'uses' => 'App\\Http\\Controllers\\BillerController@update',
        'controller' => 'App\\Http\\Controllers\\BillerController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'biller.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'biller/{biller}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'biller.destroy',
        'uses' => 'App\\Http\\Controllers\\BillerController@destroy',
        'controller' => 'App\\Http\\Controllers\\BillerController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D1cvUFktMpCkGU1S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/sale-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@saleData',
        'controller' => 'App\\Http\\Controllers\\SaleController@saleData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D1cvUFktMpCkGU1S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.sendmail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/sendmail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@sendMail',
        'controller' => 'App\\Http\\Controllers\\SaleController@sendMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.sendmail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WJKBB6zNcjrTXS5U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/sale_by_csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@saleByCsv',
        'controller' => 'App\\Http\\Controllers\\SaleController@saleByCsv',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WJKBB6zNcjrTXS5U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xnt45ceoBimXthvW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/product_sale/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@productSaleData',
        'controller' => 'App\\Http\\Controllers\\SaleController@productSaleData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xnt45ceoBimXthvW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importsale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@importSale',
        'controller' => 'App\\Http\\Controllers\\SaleController@importSale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.pos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@posSale',
        'controller' => 'App\\Http\\Controllers\\SaleController@posSale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.pos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/lims_sale_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@limsSaleSearch',
        'controller' => 'App\\Http\\Controllers\\SaleController@limsSaleSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_sale.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/lims_product_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@limsProductSearch',
        'controller' => 'App\\Http\\Controllers\\SaleController@limsProductSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_sale.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.getcustomergroup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/getcustomergroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@getCustomerGroup',
        'controller' => 'App\\Http\\Controllers\\SaleController@getCustomerGroup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.getcustomergroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.getproduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/getproduct/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@getProduct',
        'controller' => 'App\\Http\\Controllers\\SaleController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.getproduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5APAO43miwww6EbF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/getproduct/{category_id}/{brand_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@getProductByFilter',
        'controller' => 'App\\Http\\Controllers\\SaleController@getProductByFilter',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5APAO43miwww6EbF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r3EREFLU80xnV0aJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/getfeatured',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@getFeatured',
        'controller' => 'App\\Http\\Controllers\\SaleController@getFeatured',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::r3EREFLU80xnV0aJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UJGpNairL9wPYFIE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/get_gift_card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@getGiftCard',
        'controller' => 'App\\Http\\Controllers\\SaleController@getGiftCard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UJGpNairL9wPYFIE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y3Kc7vl58950dRGZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/paypalSuccess',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@paypalSuccess',
        'controller' => 'App\\Http\\Controllers\\SaleController@paypalSuccess',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::y3Kc7vl58950dRGZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::opI9xuJznNkSsodP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/paypalPaymentSuccess/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@paypalPaymentSuccess',
        'controller' => 'App\\Http\\Controllers\\SaleController@paypalPaymentSuccess',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::opI9xuJznNkSsodP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/gen_invoice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@genInvoice',
        'controller' => 'App\\Http\\Controllers\\SaleController@genInvoice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.add-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/add_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@addPayment',
        'controller' => 'App\\Http\\Controllers\\SaleController@addPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.add-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.get-payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/getpayment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@getPayment',
        'controller' => 'App\\Http\\Controllers\\SaleController@getPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.get-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.update-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/updatepayment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@updatePayment',
        'controller' => 'App\\Http\\Controllers\\SaleController@updatePayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.update-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.delete-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/deletepayment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@deletePayment',
        'controller' => 'App\\Http\\Controllers\\SaleController@deletePayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.delete-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sale.draft' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/{id}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@createSale',
        'controller' => 'App\\Http\\Controllers\\SaleController@createSale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sale.draft',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sjMVWiY7eEZk12Ld' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\SaleController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sjMVWiY7eEZk12Ld',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.printLastReciept' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/print-last-reciept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@printLastReciept',
        'controller' => 'App\\Http\\Controllers\\SaleController@printLastReciept',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sales.printLastReciept',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nsoCDJxEL0TqbUA3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/today-sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@todaySale',
        'controller' => 'App\\Http\\Controllers\\SaleController@todaySale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nsoCDJxEL0TqbUA3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9NwfGRAnjpquSL9M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/today-profit/{warehouse_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@todayProfit',
        'controller' => 'App\\Http\\Controllers\\SaleController@todayProfit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9NwfGRAnjpquSL9M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0FwqMpRjTqPUPmlx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/check-discount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SaleController@checkDiscount',
        'controller' => 'App\\Http\\Controllers\\SaleController@checkDiscount',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0FwqMpRjTqPUPmlx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'sales.index',
        'uses' => 'App\\Http\\Controllers\\SaleController@index',
        'controller' => 'App\\Http\\Controllers\\SaleController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'sales.create',
        'uses' => 'App\\Http\\Controllers\\SaleController@create',
        'controller' => 'App\\Http\\Controllers\\SaleController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'sales.store',
        'uses' => 'App\\Http\\Controllers\\SaleController@store',
        'controller' => 'App\\Http\\Controllers\\SaleController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'sales.show',
        'uses' => 'App\\Http\\Controllers\\SaleController@show',
        'controller' => 'App\\Http\\Controllers\\SaleController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sales/{sale}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'sales.edit',
        'uses' => 'App\\Http\\Controllers\\SaleController@edit',
        'controller' => 'App\\Http\\Controllers\\SaleController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'sales.update',
        'uses' => 'App\\Http\\Controllers\\SaleController@update',
        'controller' => 'App\\Http\\Controllers\\SaleController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sales.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'sales/{sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'sales.destroy',
        'uses' => 'App\\Http\\Controllers\\SaleController@destroy',
        'controller' => 'App\\Http\\Controllers\\SaleController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delivery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryController@index',
        'controller' => 'App\\Http\\Controllers\\DeliveryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x6TdsHjQGsmQuVgj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delivery/product_delivery/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryController@productDeliveryData',
        'controller' => 'App\\Http\\Controllers\\DeliveryController@productDeliveryData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::x6TdsHjQGsmQuVgj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NuX4PxbUCQR7Tb1u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delivery/create/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryController@create',
        'controller' => 'App\\Http\\Controllers\\DeliveryController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NuX4PxbUCQR7Tb1u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delivery/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryController@store',
        'controller' => 'App\\Http\\Controllers\\DeliveryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery.sendMail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delivery/sendmail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryController@sendMail',
        'controller' => 'App\\Http\\Controllers\\DeliveryController@sendMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery.sendMail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::09zvnuK7qlof4c1H' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delivery/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryController@edit',
        'controller' => 'App\\Http\\Controllers\\DeliveryController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::09zvnuK7qlof4c1H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delivery/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryController@update',
        'controller' => 'App\\Http\\Controllers\\DeliveryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g8i5uZAIRqJQ1JsC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delivery/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\DeliveryController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::g8i5uZAIRqJQ1JsC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delivery/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\DeliveryController@delete',
        'controller' => 'App\\Http\\Controllers\\DeliveryController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quotations/quotation-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationController@quotationData',
        'controller' => 'App\\Http\\Controllers\\QuotationController@quotationData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'quotations.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qodWToDJpFDDT4U5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotations/product_quotation/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationController@productQuotationData',
        'controller' => 'App\\Http\\Controllers\\QuotationController@productQuotationData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qodWToDJpFDDT4U5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_quotation.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotations/lims_product_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationController@limsProductSearch',
        'controller' => 'App\\Http\\Controllers\\QuotationController@limsProductSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_quotation.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotation.getcustomergroup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotations/getcustomergroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationController@getCustomerGroup',
        'controller' => 'App\\Http\\Controllers\\QuotationController@getCustomerGroup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'quotation.getcustomergroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotation.getproduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotations/getproduct/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationController@getProduct',
        'controller' => 'App\\Http\\Controllers\\QuotationController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'quotation.getproduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotation.create_sale' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotations/{id}/create_sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationController@createSale',
        'controller' => 'App\\Http\\Controllers\\QuotationController@createSale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'quotation.create_sale',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotation.create_purchase' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotations/{id}/create_purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationController@createPurchase',
        'controller' => 'App\\Http\\Controllers\\QuotationController@createPurchase',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'quotation.create_purchase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotation.sendmail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quotations/sendmail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationController@sendMail',
        'controller' => 'App\\Http\\Controllers\\QuotationController@sendMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'quotation.sendmail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RA1g629uXvUb7XH3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quotations/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\QuotationController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\QuotationController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RA1g629uXvUb7XH3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'quotations.index',
        'uses' => 'App\\Http\\Controllers\\QuotationController@index',
        'controller' => 'App\\Http\\Controllers\\QuotationController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'quotations.create',
        'uses' => 'App\\Http\\Controllers\\QuotationController@create',
        'controller' => 'App\\Http\\Controllers\\QuotationController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'quotations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'quotations.store',
        'uses' => 'App\\Http\\Controllers\\QuotationController@store',
        'controller' => 'App\\Http\\Controllers\\QuotationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotations/{quotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'quotations.show',
        'uses' => 'App\\Http\\Controllers\\QuotationController@show',
        'controller' => 'App\\Http\\Controllers\\QuotationController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'quotations/{quotation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'quotations.edit',
        'uses' => 'App\\Http\\Controllers\\QuotationController@edit',
        'controller' => 'App\\Http\\Controllers\\QuotationController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'quotations/{quotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'quotations.update',
        'uses' => 'App\\Http\\Controllers\\QuotationController@update',
        'controller' => 'App\\Http\\Controllers\\QuotationController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'quotations.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'quotations/{quotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'quotations.destroy',
        'uses' => 'App\\Http\\Controllers\\QuotationController@destroy',
        'controller' => 'App\\Http\\Controllers\\QuotationController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases/purchase-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@purchaseData',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@purchaseData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchases.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6LQ6LZNleBuLBwSY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/product_purchase/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@productPurchaseData',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@productPurchaseData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6LQ6LZNleBuLBwSY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_purchase.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/lims_product_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@limsProductSearch',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@limsProductSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_purchase.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.add-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases/add_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@addPayment',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@addPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase.add-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.get-payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/getpayment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@getPayment',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@getPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase.get-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.update-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases/updatepayment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@updatePayment',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@updatePayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase.update-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.delete-payment' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases/deletepayment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@deletePayment',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@deletePayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase.delete-payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MdcH9IepXxbssUJn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/purchase_by_csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@purchaseByCsv',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@purchaseByCsv',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MdcH9IepXxbssUJn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchase.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importpurchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@importPurchase',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@importPurchase',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'purchase.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6NLjQqdEsWKWP7an' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\PurchaseController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6NLjQqdEsWKWP7an',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'purchases.index',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'purchases.create',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@create',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'purchases.store',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@store',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'purchases.show',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@show',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'purchases/{purchase}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'purchases.edit',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@edit',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'purchases/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'purchases.update',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@update',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'purchases.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'purchases/{purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'purchases.destroy',
        'uses' => 'App\\Http\\Controllers\\PurchaseController@destroy',
        'controller' => 'App\\Http\\Controllers\\PurchaseController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfers/transfer-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@transferData',
        'controller' => 'App\\Http\\Controllers\\TransferController@transferData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfers.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E6ceDKabICYsRYRM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfers/product_transfer/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@productTransferData',
        'controller' => 'App\\Http\\Controllers\\TransferController@productTransferData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::E6ceDKabICYsRYRM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x6RJnUKBwPh1rUi2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfers/transfer_by_csv',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@transferByCsv',
        'controller' => 'App\\Http\\Controllers\\TransferController@transferByCsv',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::x6RJnUKBwPh1rUi2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'importtransfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@importTransfer',
        'controller' => 'App\\Http\\Controllers\\TransferController@importTransfer',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfer.getproduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfers/getproduct/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@getProduct',
        'controller' => 'App\\Http\\Controllers\\TransferController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'transfer.getproduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_transfer.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfers/lims_product_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@limsProductSearch',
        'controller' => 'App\\Http\\Controllers\\TransferController@limsProductSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_transfer.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZgwO9dKKoPitppnH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfers/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\TransferController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\TransferController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZgwO9dKKoPitppnH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'transfers.index',
        'uses' => 'App\\Http\\Controllers\\TransferController@index',
        'controller' => 'App\\Http\\Controllers\\TransferController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'transfers.create',
        'uses' => 'App\\Http\\Controllers\\TransferController@create',
        'controller' => 'App\\Http\\Controllers\\TransferController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'transfers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'transfers.store',
        'uses' => 'App\\Http\\Controllers\\TransferController@store',
        'controller' => 'App\\Http\\Controllers\\TransferController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfers/{transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'transfers.show',
        'uses' => 'App\\Http\\Controllers\\TransferController@show',
        'controller' => 'App\\Http\\Controllers\\TransferController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'transfers/{transfer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'transfers.edit',
        'uses' => 'App\\Http\\Controllers\\TransferController@edit',
        'controller' => 'App\\Http\\Controllers\\TransferController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'transfers/{transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'transfers.update',
        'uses' => 'App\\Http\\Controllers\\TransferController@update',
        'controller' => 'App\\Http\\Controllers\\TransferController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'transfers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'transfers/{transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'transfers.destroy',
        'uses' => 'App\\Http\\Controllers\\TransferController@destroy',
        'controller' => 'App\\Http\\Controllers\\TransferController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'adjustment.getproduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'qty_adjustment/getproduct/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@getProduct',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'adjustment.getproduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_adjustment.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'qty_adjustment/lims_product_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@limsProductSearch',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@limsProductSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_adjustment.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MlYyviWpQsAa7SIF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'qty_adjustment/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MlYyviWpQsAa7SIF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'qty_adjustment.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'qty_adjustment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'qty_adjustment.index',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@index',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'qty_adjustment.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'qty_adjustment/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'qty_adjustment.create',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@create',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'qty_adjustment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'qty_adjustment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'qty_adjustment.store',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@store',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'qty_adjustment.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'qty_adjustment/{qty_adjustment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'qty_adjustment.show',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@show',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'qty_adjustment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'qty_adjustment/{qty_adjustment}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'qty_adjustment.edit',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@edit',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'qty_adjustment.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'qty_adjustment/{qty_adjustment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'qty_adjustment.update',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@update',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'qty_adjustment.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'qty_adjustment/{qty_adjustment}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'qty_adjustment.destroy',
        'uses' => 'App\\Http\\Controllers\\AdjustmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\AdjustmentController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::77OsZekzzZjtOAxZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'return-sale/return-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnController@returnData',
        'controller' => 'App\\Http\\Controllers\\ReturnController@returnData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::77OsZekzzZjtOAxZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-sale.getcustomergroup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-sale/getcustomergroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnController@getCustomerGroup',
        'controller' => 'App\\Http\\Controllers\\ReturnController@getCustomerGroup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'return-sale.getcustomergroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-sale.sendmail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'return-sale/sendmail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnController@sendMail',
        'controller' => 'App\\Http\\Controllers\\ReturnController@sendMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'return-sale.sendmail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-sale.getproduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-sale/getproduct/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnController@getProduct',
        'controller' => 'App\\Http\\Controllers\\ReturnController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'return-sale.getproduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_return-sale.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-sale/lims_product_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnController@limsProductSearch',
        'controller' => 'App\\Http\\Controllers\\ReturnController@limsProductSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_return-sale.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::azRlcC5N6nMLQTz7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-sale/product_return/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnController@productReturnData',
        'controller' => 'App\\Http\\Controllers\\ReturnController@productReturnData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::azRlcC5N6nMLQTz7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M6oYxksM4XMIwxAq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'return-sale/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\ReturnController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::M6oYxksM4XMIwxAq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-sale.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-sale.index',
        'uses' => 'App\\Http\\Controllers\\ReturnController@index',
        'controller' => 'App\\Http\\Controllers\\ReturnController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-sale.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-sale/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-sale.create',
        'uses' => 'App\\Http\\Controllers\\ReturnController@create',
        'controller' => 'App\\Http\\Controllers\\ReturnController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-sale.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'return-sale',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-sale.store',
        'uses' => 'App\\Http\\Controllers\\ReturnController@store',
        'controller' => 'App\\Http\\Controllers\\ReturnController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-sale.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-sale/{return_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-sale.show',
        'uses' => 'App\\Http\\Controllers\\ReturnController@show',
        'controller' => 'App\\Http\\Controllers\\ReturnController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-sale.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-sale/{return_sale}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-sale.edit',
        'uses' => 'App\\Http\\Controllers\\ReturnController@edit',
        'controller' => 'App\\Http\\Controllers\\ReturnController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-sale.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'return-sale/{return_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-sale.update',
        'uses' => 'App\\Http\\Controllers\\ReturnController@update',
        'controller' => 'App\\Http\\Controllers\\ReturnController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-sale.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'return-sale/{return_sale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-sale.destroy',
        'uses' => 'App\\Http\\Controllers\\ReturnController@destroy',
        'controller' => 'App\\Http\\Controllers\\ReturnController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5LLkvLLvFhS5AeYO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'return-purchase/return-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@returnData',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@returnData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5LLkvLLvFhS5AeYO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-purchase.getcustomergroup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-purchase/getcustomergroup/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@getCustomerGroup',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@getCustomerGroup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'return-purchase.getcustomergroup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-purchase.sendmail' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'return-purchase/sendmail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@sendMail',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@sendMail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'return-purchase.sendmail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-purchase.getproduct' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-purchase/getproduct/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@getProduct',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@getProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'return-purchase.getproduct',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product_return-purchase.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-purchase/lims_product_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@limsProductSearch',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@limsProductSearch',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product_return-purchase.search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wSqVOfK5TfVBoNzM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-purchase/product_return/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@productReturnData',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@productReturnData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wSqVOfK5TfVBoNzM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M6r4DZsoOXiFE2Xc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'return-purchase/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::M6r4DZsoOXiFE2Xc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-purchase.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-purchase.index',
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@index',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-purchase.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-purchase/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-purchase.create',
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@create',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-purchase.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'return-purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-purchase.store',
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@store',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-purchase.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-purchase/{return_purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-purchase.show',
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@show',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-purchase.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'return-purchase/{return_purchase}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-purchase.edit',
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@edit',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-purchase.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'return-purchase/{return_purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-purchase.update',
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@update',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'return-purchase.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'return-purchase/{return_purchase}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'return-purchase.destroy',
        'uses' => 'App\\Http\\Controllers\\ReturnPurchaseController@destroy',
        'controller' => 'App\\Http\\Controllers\\ReturnPurchaseController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.qtyAlert' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/product_quantity_alert',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@productQuantityAlert',
        'controller' => 'App\\Http\\Controllers\\ReportController@productQuantityAlert',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.qtyAlert',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.dailySaleObjective' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/daily-sale-objective',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@dailySaleObjective',
        'controller' => 'App\\Http\\Controllers\\ReportController@dailySaleObjective',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.dailySaleObjective',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N7Sjva4xExy6Cqal' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/daily-sale-objective-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@dailySaleObjectiveData',
        'controller' => 'App\\Http\\Controllers\\ReportController@dailySaleObjectiveData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::N7Sjva4xExy6Cqal',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.productExpiry' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/product-expiry',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@productExpiry',
        'controller' => 'App\\Http\\Controllers\\ReportController@productExpiry',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.productExpiry',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.warehouseStock' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/warehouse_stock',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@warehouseStock',
        'controller' => 'App\\Http\\Controllers\\ReportController@warehouseStock',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.warehouseStock',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::90W27S9paLzDh1SN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/daily_sale/{year}/{month}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@dailySale',
        'controller' => 'App\\Http\\Controllers\\ReportController@dailySale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::90W27S9paLzDh1SN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.dailySaleByWarehouse' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/daily_sale/{year}/{month}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@dailySaleByWarehouse',
        'controller' => 'App\\Http\\Controllers\\ReportController@dailySaleByWarehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.dailySaleByWarehouse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N46WysZkQx5A6Pjz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/monthly_sale/{year}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@monthlySale',
        'controller' => 'App\\Http\\Controllers\\ReportController@monthlySale',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::N46WysZkQx5A6Pjz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.monthlySaleByWarehouse' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/monthly_sale/{year}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@monthlySaleByWarehouse',
        'controller' => 'App\\Http\\Controllers\\ReportController@monthlySaleByWarehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.monthlySaleByWarehouse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0VTas6xCyOpIQEeF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/daily_purchase/{year}/{month}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@dailyPurchase',
        'controller' => 'App\\Http\\Controllers\\ReportController@dailyPurchase',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0VTas6xCyOpIQEeF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.dailyPurchaseByWarehouse' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/daily_purchase/{year}/{month}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@dailyPurchaseByWarehouse',
        'controller' => 'App\\Http\\Controllers\\ReportController@dailyPurchaseByWarehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.dailyPurchaseByWarehouse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DDYjYmemVUduiuAL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/monthly_purchase/{year}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@monthlyPurchase',
        'controller' => 'App\\Http\\Controllers\\ReportController@monthlyPurchase',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DDYjYmemVUduiuAL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.monthlyPurchaseByWarehouse' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/monthly_purchase/{year}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@monthlyPurchaseByWarehouse',
        'controller' => 'App\\Http\\Controllers\\ReportController@monthlyPurchaseByWarehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.monthlyPurchaseByWarehouse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n6HpifBWuflEPRg2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/best_seller',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@bestSeller',
        'controller' => 'App\\Http\\Controllers\\ReportController@bestSeller',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::n6HpifBWuflEPRg2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.bestSellerByWarehouse' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/best_seller',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@bestSellerByWarehouse',
        'controller' => 'App\\Http\\Controllers\\ReportController@bestSellerByWarehouse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.bestSellerByWarehouse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.profitLoss' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/profit_loss',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@profitLoss',
        'controller' => 'App\\Http\\Controllers\\ReportController@profitLoss',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.profitLoss',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'report/product_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@productReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@productReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S46yf6Qzs1dPzVrY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/product_report_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@productReportData',
        'controller' => 'App\\Http\\Controllers\\ReportController@productReportData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::S46yf6Qzs1dPzVrY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.purchase' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/purchase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@purchaseReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@purchaseReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.purchase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.sale' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/sale_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@saleReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@saleReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.sale',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.saleChart' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/sale-report-chart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@saleReportChart',
        'controller' => 'App\\Http\\Controllers\\ReportController@saleReportChart',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.saleChart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.paymentByDate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/payment_report_by_date',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@paymentReportByDate',
        'controller' => 'App\\Http\\Controllers\\ReportController@paymentReportByDate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.paymentByDate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.warehouse' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/warehouse_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@warehouseReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@warehouseReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.warehouse',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8JhEJQKQcnCdYfPx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/warehouse-sale-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@warehouseSaleData',
        'controller' => 'App\\Http\\Controllers\\ReportController@warehouseSaleData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8JhEJQKQcnCdYfPx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P8sXIgX291KGlfbA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/warehouse-purchase-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@warehousePurchaseData',
        'controller' => 'App\\Http\\Controllers\\ReportController@warehousePurchaseData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::P8sXIgX291KGlfbA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iMeIOwTGtIuwvQsZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/warehouse-expense-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@warehouseExpenseData',
        'controller' => 'App\\Http\\Controllers\\ReportController@warehouseExpenseData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iMeIOwTGtIuwvQsZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XjPVXmuHhO79jV13' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/warehouse-quotation-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@warehouseQuotationData',
        'controller' => 'App\\Http\\Controllers\\ReportController@warehouseQuotationData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XjPVXmuHhO79jV13',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rMBk3naFqzZ4wjHC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/warehouse-return-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@warehouseReturnData',
        'controller' => 'App\\Http\\Controllers\\ReportController@warehouseReturnData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rMBk3naFqzZ4wjHC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/user_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@userReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@userReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yfOAe44lfqS0vLIr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/user-sale-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@userSaleData',
        'controller' => 'App\\Http\\Controllers\\ReportController@userSaleData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yfOAe44lfqS0vLIr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::licAIeXIM2Gg4auK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/user-purchase-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@userPurchaseData',
        'controller' => 'App\\Http\\Controllers\\ReportController@userPurchaseData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::licAIeXIM2Gg4auK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EmovM4jDppsbogjZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/user-expense-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@userExpenseData',
        'controller' => 'App\\Http\\Controllers\\ReportController@userExpenseData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EmovM4jDppsbogjZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ylb9O2TPhEkrDJFs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/user-quotation-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@userQuotationData',
        'controller' => 'App\\Http\\Controllers\\ReportController@userQuotationData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ylb9O2TPhEkrDJFs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YhopP2znFtWIyEPC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/user-payment-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@userPaymentData',
        'controller' => 'App\\Http\\Controllers\\ReportController@userPaymentData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YhopP2znFtWIyEPC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nOCK8o6TQkfBo1OL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/user-transfer-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@userTransferData',
        'controller' => 'App\\Http\\Controllers\\ReportController@userTransferData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nOCK8o6TQkfBo1OL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5jDusAJ4hyqdPkiT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/user-payroll-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@userPayrollData',
        'controller' => 'App\\Http\\Controllers\\ReportController@userPayrollData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5jDusAJ4hyqdPkiT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.customer' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer_report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.customer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AWn3y9D17zDsm9D6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer-sale-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerSaleData',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerSaleData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AWn3y9D17zDsm9D6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZBFxzfQlIZw1cbxx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer-payment-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerPaymentData',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerPaymentData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZBFxzfQlIZw1cbxx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wwgfGZ1nUwf0UG7F' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer-quotation-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerQuotationData',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerQuotationData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wwgfGZ1nUwf0UG7F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9QSEfjPtC8BuyeO8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer-return-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerReturnData',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerReturnData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9QSEfjPtC8BuyeO8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.customer_group' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer-group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerGroupReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerGroupReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.customer_group',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::doGe8sjwuowSQvZg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer-group-sale-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerGroupSaleData',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerGroupSaleData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::doGe8sjwuowSQvZg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wuvcbwFUvXtdieM3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer-group-payment-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerGroupPaymentData',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerGroupPaymentData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wuvcbwFUvXtdieM3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mm0a4GwmViolEbKS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer-group-quotation-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerGroupQuotationData',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerGroupQuotationData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mm0a4GwmViolEbKS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NVdRJuoRH4Za9eBQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer-group-return-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerGroupReturnData',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerGroupReturnData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NVdRJuoRH4Za9eBQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.supplier' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/supplier',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@supplierReport',
        'controller' => 'App\\Http\\Controllers\\ReportController@supplierReport',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.supplier',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5Lu2pg9GJHYEf3sM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/supplier-purchase-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@supplierPurchaseData',
        'controller' => 'App\\Http\\Controllers\\ReportController@supplierPurchaseData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5Lu2pg9GJHYEf3sM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RHFB49CjPT9XRGOD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/supplier-payment-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@supplierPaymentData',
        'controller' => 'App\\Http\\Controllers\\ReportController@supplierPaymentData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RHFB49CjPT9XRGOD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ije8QqFbM4QKNdef' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/supplier-return-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@supplierReturnData',
        'controller' => 'App\\Http\\Controllers\\ReportController@supplierReturnData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ije8QqFbM4QKNdef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3aOIMdxiJGPK9BGu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/supplier-quotation-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@supplierQuotationData',
        'controller' => 'App\\Http\\Controllers\\ReportController@supplierQuotationData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3aOIMdxiJGPK9BGu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.customerDueByDate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer-due-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerDueReportByDate',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerDueReportByDate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.customerDueByDate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sPT0uobBcHZIAmgG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/customer-due-report-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@customerDueReportData',
        'controller' => 'App\\Http\\Controllers\\ReportController@customerDueReportData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::sPT0uobBcHZIAmgG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'report.supplierDueByDate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/supplier-due-report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@supplierDueReportByDate',
        'controller' => 'App\\Http\\Controllers\\ReportController@supplierDueReportByDate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'report.supplierDueByDate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XqM5KGNBeKolpxzZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'report/supplier-due-report-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ReportController@supplierDueReportData',
        'controller' => 'App\\Http\\Controllers\\ReportController@supplierDueReportData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::XqM5KGNBeKolpxzZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@profile',
        'controller' => 'App\\Http\\Controllers\\UserController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profileUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/update_profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@profileUpdate',
        'controller' => 'App\\Http\\Controllers\\UserController@profileUpdate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.profileUpdate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.password' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/changepass/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@changePassword',
        'controller' => 'App\\Http\\Controllers\\UserController@changePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fI8zhDyH4jpoQXMt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/genpass',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@generatePassword',
        'controller' => 'App\\Http\\Controllers\\UserController@generatePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fI8zhDyH4jpoQXMt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gWB9k2O4nejg6gZH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\UserController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gWB9k2O4nejg6gZH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'user.index',
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'user.create',
        'uses' => 'App\\Http\\Controllers\\UserController@create',
        'controller' => 'App\\Http\\Controllers\\UserController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'user.store',
        'uses' => 'App\\Http\\Controllers\\UserController@store',
        'controller' => 'App\\Http\\Controllers\\UserController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'user.show',
        'uses' => 'App\\Http\\Controllers\\UserController@show',
        'controller' => 'App\\Http\\Controllers\\UserController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'user.edit',
        'uses' => 'App\\Http\\Controllers\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\UserController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'user.update',
        'uses' => 'App\\Http\\Controllers\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\UserController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'user.destroy',
        'uses' => 'App\\Http\\Controllers\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.general' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/general_setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@generalSetting',
        'controller' => 'App\\Http\\Controllers\\SettingController@generalSetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.general',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.generalStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setting/general_setting_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@generalSettingStore',
        'controller' => 'App\\Http\\Controllers\\SettingController@generalSettingStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.generalStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.rewardPoint' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/reward-point-setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@rewardPointSetting',
        'controller' => 'App\\Http\\Controllers\\SettingController@rewardPointSetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.rewardPoint',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.rewardPointStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setting/reward-point-setting_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@rewardPointSettingStore',
        'controller' => 'App\\Http\\Controllers\\SettingController@rewardPointSettingStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.rewardPointStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.backup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@backup',
        'controller' => 'App\\Http\\Controllers\\SettingController@backup',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.backup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iKypQRlF1JTjtxYX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/general_setting/change-theme/{theme}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@changeTheme',
        'controller' => 'App\\Http\\Controllers\\SettingController@changeTheme',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iKypQRlF1JTjtxYX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.mail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/mail_setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@mailSetting',
        'controller' => 'App\\Http\\Controllers\\SettingController@mailSetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.mail',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.sms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/sms_setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@smsSetting',
        'controller' => 'App\\Http\\Controllers\\SettingController@smsSetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.sms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.createSms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/createsms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@createSms',
        'controller' => 'App\\Http\\Controllers\\SettingController@createSms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.createSms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.sendSms' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setting/sendsms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@sendSms',
        'controller' => 'App\\Http\\Controllers\\SettingController@sendSms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.sendSms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.hrm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/hrm_setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@hrmSetting',
        'controller' => 'App\\Http\\Controllers\\SettingController@hrmSetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.hrm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.hrmStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setting/hrm_setting_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@hrmSettingStore',
        'controller' => 'App\\Http\\Controllers\\SettingController@hrmSettingStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.hrmStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.mailStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setting/mail_setting_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@mailSettingStore',
        'controller' => 'App\\Http\\Controllers\\SettingController@mailSettingStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.mailStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.smsStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setting/sms_setting_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@smsSettingStore',
        'controller' => 'App\\Http\\Controllers\\SettingController@smsSettingStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.smsStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.pos' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/pos_setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@posSetting',
        'controller' => 'App\\Http\\Controllers\\SettingController@posSetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.pos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.posStore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'setting/pos_setting_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@posSettingStore',
        'controller' => 'App\\Http\\Controllers\\SettingController@posSettingStore',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.posStore',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'setting.emptyDatabase' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/empty-database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\SettingController@emptyDatabase',
        'controller' => 'App\\Http\\Controllers\\SettingController@emptyDatabase',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'setting.emptyDatabase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lfPClSK3mdjd75pS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expense_categories/gencode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@generateCode',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@generateCode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lfPClSK3mdjd75pS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense_category.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'expense_categories/import',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@import',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@import',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'expense_category.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mzuPm9v3OS8MkJZk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'expense_categories/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mzuPm9v3OS8MkJZk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense_categories.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expense_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expense_categories.index',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@index',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense_categories.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expense_categories/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expense_categories.create',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@create',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense_categories.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'expense_categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expense_categories.store',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@store',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense_categories.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expense_categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expense_categories.show',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@show',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense_categories.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expense_categories/{expense_category}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expense_categories.edit',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@edit',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense_categories.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'expense_categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expense_categories.update',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@update',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expense_categories.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'expense_categories/{expense_category}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expense_categories.destroy',
        'uses' => 'App\\Http\\Controllers\\ExpenseCategoryController@destroy',
        'controller' => 'App\\Http\\Controllers\\ExpenseCategoryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'expenses/expense-data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseController@expenseData',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@expenseData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'expenses.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fulYBtX03T3NAYJQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'expenses/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ExpenseController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fulYBtX03T3NAYJQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expenses.index',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@index',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expenses/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expenses.create',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@create',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'expenses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expenses.store',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@store',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expenses.show',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@show',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'expenses/{expense}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expenses.edit',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@edit',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expenses.update',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@update',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'expenses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'expenses/{expense}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'expenses.destroy',
        'uses' => 'App\\Http\\Controllers\\ExpenseController@destroy',
        'controller' => 'App\\Http\\Controllers\\ExpenseController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dz5yFM21BcxAgTux' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gift_cards/gencode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\GiftCardController@generateCode',
        'controller' => 'App\\Http\\Controllers\\GiftCardController@generateCode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::dz5yFM21BcxAgTux',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gift_cards.recharge' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gift_cards/recharge/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\GiftCardController@recharge',
        'controller' => 'App\\Http\\Controllers\\GiftCardController@recharge',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gift_cards.recharge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3fU9k7q70ZpFIbJT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gift_cards/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\GiftCardController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\GiftCardController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3fU9k7q70ZpFIbJT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gift_cards.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gift_cards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'gift_cards.index',
        'uses' => 'App\\Http\\Controllers\\GiftCardController@index',
        'controller' => 'App\\Http\\Controllers\\GiftCardController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gift_cards.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gift_cards/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'gift_cards.create',
        'uses' => 'App\\Http\\Controllers\\GiftCardController@create',
        'controller' => 'App\\Http\\Controllers\\GiftCardController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gift_cards.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'gift_cards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'gift_cards.store',
        'uses' => 'App\\Http\\Controllers\\GiftCardController@store',
        'controller' => 'App\\Http\\Controllers\\GiftCardController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gift_cards.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gift_cards/{gift_card}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'gift_cards.show',
        'uses' => 'App\\Http\\Controllers\\GiftCardController@show',
        'controller' => 'App\\Http\\Controllers\\GiftCardController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gift_cards.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gift_cards/{gift_card}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'gift_cards.edit',
        'uses' => 'App\\Http\\Controllers\\GiftCardController@edit',
        'controller' => 'App\\Http\\Controllers\\GiftCardController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gift_cards.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'gift_cards/{gift_card}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'gift_cards.update',
        'uses' => 'App\\Http\\Controllers\\GiftCardController@update',
        'controller' => 'App\\Http\\Controllers\\GiftCardController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gift_cards.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'gift_cards/{gift_card}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'gift_cards.destroy',
        'uses' => 'App\\Http\\Controllers\\GiftCardController@destroy',
        'controller' => 'App\\Http\\Controllers\\GiftCardController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e76A113sfR9QPyUV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coupons/gencode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CouponController@generateCode',
        'controller' => 'App\\Http\\Controllers\\CouponController@generateCode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::e76A113sfR9QPyUV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NmivPYged1fvxuK3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coupons/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CouponController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\CouponController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NmivPYged1fvxuK3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupons.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'coupons.index',
        'uses' => 'App\\Http\\Controllers\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\CouponController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupons.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coupons/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'coupons.create',
        'uses' => 'App\\Http\\Controllers\\CouponController@create',
        'controller' => 'App\\Http\\Controllers\\CouponController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupons.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'coupons.store',
        'uses' => 'App\\Http\\Controllers\\CouponController@store',
        'controller' => 'App\\Http\\Controllers\\CouponController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupons.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coupons/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'coupons.show',
        'uses' => 'App\\Http\\Controllers\\CouponController@show',
        'controller' => 'App\\Http\\Controllers\\CouponController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupons.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'coupons/{coupon}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'coupons.edit',
        'uses' => 'App\\Http\\Controllers\\CouponController@edit',
        'controller' => 'App\\Http\\Controllers\\CouponController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupons.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'coupons/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'coupons.update',
        'uses' => 'App\\Http\\Controllers\\CouponController@update',
        'controller' => 'App\\Http\\Controllers\\CouponController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupons.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'coupons/{coupon}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'coupons.destroy',
        'uses' => 'App\\Http\\Controllers\\CouponController@destroy',
        'controller' => 'App\\Http\\Controllers\\CouponController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::75ZITEUZvw3TEmls' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/make-default/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountsController@makeDefault',
        'controller' => 'App\\Http\\Controllers\\AccountsController@makeDefault',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::75ZITEUZvw3TEmls',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.balancesheet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/balancesheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountsController@balanceSheet',
        'controller' => 'App\\Http\\Controllers\\AccountsController@balanceSheet',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'accounts.balancesheet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.statement' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'accounts/account-statement',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\AccountsController@accountStatement',
        'controller' => 'App\\Http\\Controllers\\AccountsController@accountStatement',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'accounts.statement',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'accounts.index',
        'uses' => 'App\\Http\\Controllers\\AccountsController@index',
        'controller' => 'App\\Http\\Controllers\\AccountsController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'accounts.create',
        'uses' => 'App\\Http\\Controllers\\AccountsController@create',
        'controller' => 'App\\Http\\Controllers\\AccountsController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'accounts.store',
        'uses' => 'App\\Http\\Controllers\\AccountsController@store',
        'controller' => 'App\\Http\\Controllers\\AccountsController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'accounts.show',
        'uses' => 'App\\Http\\Controllers\\AccountsController@show',
        'controller' => 'App\\Http\\Controllers\\AccountsController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'accounts/{account}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'accounts.edit',
        'uses' => 'App\\Http\\Controllers\\AccountsController@edit',
        'controller' => 'App\\Http\\Controllers\\AccountsController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'accounts.update',
        'uses' => 'App\\Http\\Controllers\\AccountsController@update',
        'controller' => 'App\\Http\\Controllers\\AccountsController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'accounts.destroy',
        'uses' => 'App\\Http\\Controllers\\AccountsController@destroy',
        'controller' => 'App\\Http\\Controllers\\AccountsController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'money-transfers.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'money-transfers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'money-transfers.index',
        'uses' => 'App\\Http\\Controllers\\MoneyTransferController@index',
        'controller' => 'App\\Http\\Controllers\\MoneyTransferController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'money-transfers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'money-transfers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'money-transfers.create',
        'uses' => 'App\\Http\\Controllers\\MoneyTransferController@create',
        'controller' => 'App\\Http\\Controllers\\MoneyTransferController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'money-transfers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'money-transfers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'money-transfers.store',
        'uses' => 'App\\Http\\Controllers\\MoneyTransferController@store',
        'controller' => 'App\\Http\\Controllers\\MoneyTransferController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'money-transfers.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'money-transfers/{money_transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'money-transfers.show',
        'uses' => 'App\\Http\\Controllers\\MoneyTransferController@show',
        'controller' => 'App\\Http\\Controllers\\MoneyTransferController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'money-transfers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'money-transfers/{money_transfer}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'money-transfers.edit',
        'uses' => 'App\\Http\\Controllers\\MoneyTransferController@edit',
        'controller' => 'App\\Http\\Controllers\\MoneyTransferController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'money-transfers.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'money-transfers/{money_transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'money-transfers.update',
        'uses' => 'App\\Http\\Controllers\\MoneyTransferController@update',
        'controller' => 'App\\Http\\Controllers\\MoneyTransferController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'money-transfers.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'money-transfers/{money_transfer}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'money-transfers.destroy',
        'uses' => 'App\\Http\\Controllers\\MoneyTransferController@destroy',
        'controller' => 'App\\Http\\Controllers\\MoneyTransferController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0yDrjUdbeq0pNIjy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'departments/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0yDrjUdbeq0pNIjy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'departments.index',
        'uses' => 'App\\Http\\Controllers\\DepartmentController@index',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'departments/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'departments.create',
        'uses' => 'App\\Http\\Controllers\\DepartmentController@create',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'departments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'departments.store',
        'uses' => 'App\\Http\\Controllers\\DepartmentController@store',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'departments.show',
        'uses' => 'App\\Http\\Controllers\\DepartmentController@show',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'departments/{department}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'departments.edit',
        'uses' => 'App\\Http\\Controllers\\DepartmentController@edit',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'departments.update',
        'uses' => 'App\\Http\\Controllers\\DepartmentController@update',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departments.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'departments/{department}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'departments.destroy',
        'uses' => 'App\\Http\\Controllers\\DepartmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O4efE6AD59updT0k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employees/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\EmployeeController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::O4efE6AD59updT0k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'employees.index',
        'uses' => 'App\\Http\\Controllers\\EmployeeController@index',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employees/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'employees.create',
        'uses' => 'App\\Http\\Controllers\\EmployeeController@create',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'employees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'employees.store',
        'uses' => 'App\\Http\\Controllers\\EmployeeController@store',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'employees.show',
        'uses' => 'App\\Http\\Controllers\\EmployeeController@show',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'employees/{employee}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'employees.edit',
        'uses' => 'App\\Http\\Controllers\\EmployeeController@edit',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'employees.update',
        'uses' => 'App\\Http\\Controllers\\EmployeeController@update',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'employees.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'employees/{employee}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'employees.destroy',
        'uses' => 'App\\Http\\Controllers\\EmployeeController@destroy',
        'controller' => 'App\\Http\\Controllers\\EmployeeController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E7TwJlftRDswCVSF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payroll/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\PayrollController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\PayrollController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::E7TwJlftRDswCVSF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'payroll.index',
        'uses' => 'App\\Http\\Controllers\\PayrollController@index',
        'controller' => 'App\\Http\\Controllers\\PayrollController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'payroll.create',
        'uses' => 'App\\Http\\Controllers\\PayrollController@create',
        'controller' => 'App\\Http\\Controllers\\PayrollController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'payroll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'payroll.store',
        'uses' => 'App\\Http\\Controllers\\PayrollController@store',
        'controller' => 'App\\Http\\Controllers\\PayrollController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/{payroll}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'payroll.show',
        'uses' => 'App\\Http\\Controllers\\PayrollController@show',
        'controller' => 'App\\Http\\Controllers\\PayrollController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payroll/{payroll}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'payroll.edit',
        'uses' => 'App\\Http\\Controllers\\PayrollController@edit',
        'controller' => 'App\\Http\\Controllers\\PayrollController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'payroll/{payroll}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'payroll.update',
        'uses' => 'App\\Http\\Controllers\\PayrollController@update',
        'controller' => 'App\\Http\\Controllers\\PayrollController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payroll.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'payroll/{payroll}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'payroll.destroy',
        'uses' => 'App\\Http\\Controllers\\PayrollController@destroy',
        'controller' => 'App\\Http\\Controllers\\PayrollController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5uu0hRwFFWFCCVgm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'attendance/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\AttendanceController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5uu0hRwFFWFCCVgm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'attendance.index',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@index',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attendance/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'attendance.create',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@create',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'attendance.store',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@store',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attendance/{attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'attendance.show',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@show',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'attendance/{attendance}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'attendance.edit',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@edit',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'attendance/{attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'attendance.update',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@update',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'attendance.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'attendance/{attendance}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'attendance.destroy',
        'uses' => 'App\\Http\\Controllers\\AttendanceController@destroy',
        'controller' => 'App\\Http\\Controllers\\AttendanceController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-count.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'stock-count.index',
        'uses' => 'App\\Http\\Controllers\\StockCountController@index',
        'controller' => 'App\\Http\\Controllers\\StockCountController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-count.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-count/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'stock-count.create',
        'uses' => 'App\\Http\\Controllers\\StockCountController@create',
        'controller' => 'App\\Http\\Controllers\\StockCountController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-count.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stock-count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'stock-count.store',
        'uses' => 'App\\Http\\Controllers\\StockCountController@store',
        'controller' => 'App\\Http\\Controllers\\StockCountController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-count.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-count/{stock_count}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'stock-count.show',
        'uses' => 'App\\Http\\Controllers\\StockCountController@show',
        'controller' => 'App\\Http\\Controllers\\StockCountController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-count.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-count/{stock_count}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'stock-count.edit',
        'uses' => 'App\\Http\\Controllers\\StockCountController@edit',
        'controller' => 'App\\Http\\Controllers\\StockCountController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-count.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'stock-count/{stock_count}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'stock-count.update',
        'uses' => 'App\\Http\\Controllers\\StockCountController@update',
        'controller' => 'App\\Http\\Controllers\\StockCountController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-count.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'stock-count/{stock_count}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'stock-count.destroy',
        'uses' => 'App\\Http\\Controllers\\StockCountController@destroy',
        'controller' => 'App\\Http\\Controllers\\StockCountController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-count.finalize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'stock-count/finalize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\StockCountController@finalize',
        'controller' => 'App\\Http\\Controllers\\StockCountController@finalize',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stock-count.finalize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H07ej1VuK6X8uI8G' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-count/stockdif/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\StockCountController@stockDif',
        'controller' => 'App\\Http\\Controllers\\StockCountController@stockDif',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::H07ej1VuK6X8uI8G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stock-count.adjustment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'stock-count/{id}/qty_adjustment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\StockCountController@qtyAdjustment',
        'controller' => 'App\\Http\\Controllers\\StockCountController@qtyAdjustment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stock-count.adjustment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UbM3IFVvHYhC6qKG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'holidays/deletebyselection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HolidayController@deleteBySelection',
        'controller' => 'App\\Http\\Controllers\\HolidayController@deleteBySelection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UbM3IFVvHYhC6qKG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'approveHoliday' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'approve-holiday/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HolidayController@approveHoliday',
        'controller' => 'App\\Http\\Controllers\\HolidayController@approveHoliday',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'approveHoliday',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'myHoliday' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'holidays/my-holiday/{year}/{month}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HolidayController@myHoliday',
        'controller' => 'App\\Http\\Controllers\\HolidayController@myHoliday',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'myHoliday',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holidays.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'holidays',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'holidays.index',
        'uses' => 'App\\Http\\Controllers\\HolidayController@index',
        'controller' => 'App\\Http\\Controllers\\HolidayController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holidays.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'holidays/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'holidays.create',
        'uses' => 'App\\Http\\Controllers\\HolidayController@create',
        'controller' => 'App\\Http\\Controllers\\HolidayController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holidays.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'holidays',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'holidays.store',
        'uses' => 'App\\Http\\Controllers\\HolidayController@store',
        'controller' => 'App\\Http\\Controllers\\HolidayController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holidays.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'holidays/{holiday}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'holidays.show',
        'uses' => 'App\\Http\\Controllers\\HolidayController@show',
        'controller' => 'App\\Http\\Controllers\\HolidayController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holidays.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'holidays/{holiday}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'holidays.edit',
        'uses' => 'App\\Http\\Controllers\\HolidayController@edit',
        'controller' => 'App\\Http\\Controllers\\HolidayController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holidays.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'holidays/{holiday}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'holidays.update',
        'uses' => 'App\\Http\\Controllers\\HolidayController@update',
        'controller' => 'App\\Http\\Controllers\\HolidayController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'holidays.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'holidays/{holiday}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'holidays.destroy',
        'uses' => 'App\\Http\\Controllers\\HolidayController@destroy',
        'controller' => 'App\\Http\\Controllers\\HolidayController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashRegister.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cash-register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@index',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cashRegister.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashRegister.checkAvailability' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cash-register/check-availability/{warehouse_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@checkAvailability',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@checkAvailability',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cashRegister.checkAvailability',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashRegister.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cash-register/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@store',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cashRegister.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NDlV3xF8Irr9tvBy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cash-register/getDetails/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@getDetails',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@getDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::NDlV3xF8Irr9tvBy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wcexryiYx5FKrBfg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cash-register/showDetails/{warehouse_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@showDetails',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@showDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wcexryiYx5FKrBfg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cashRegister.close' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'cash-register/close',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\CashRegisterController@close',
        'controller' => 'App\\Http\\Controllers\\CashRegisterController@close',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'cashRegister.close',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notifications.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\NotificationController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'notifications.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notifications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'notifications/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@store',
        'controller' => 'App\\Http\\Controllers\\NotificationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'notifications.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bqh0On7uGbApGikG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notifications/mark-as-read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@markAsRead',
        'controller' => 'App\\Http\\Controllers\\NotificationController@markAsRead',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bqh0On7uGbApGikG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currency.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'currency.index',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@index',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currency.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currency/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'currency.create',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@create',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currency.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'currency',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'currency.store',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@store',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currency.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currency/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'currency.show',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@show',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currency.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'currency/{currency}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'currency.edit',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@edit',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currency.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'currency/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'currency.update',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@update',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currency.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'currency/{currency}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'currency.destroy',
        'uses' => 'App\\Http\\Controllers\\CurrencyController@destroy',
        'controller' => 'App\\Http\\Controllers\\CurrencyController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o0Pyq9oUWgItmFhK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'my-transactions/{year}/{month}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@myTransaction',
        'controller' => 'App\\Http\\Controllers\\HomeController@myTransaction',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::o0Pyq9oUWgItmFhK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-fields.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-fields',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'custom-fields.index',
        'uses' => 'App\\Http\\Controllers\\CustomFieldController@index',
        'controller' => 'App\\Http\\Controllers\\CustomFieldController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-fields.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-fields/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'custom-fields.create',
        'uses' => 'App\\Http\\Controllers\\CustomFieldController@create',
        'controller' => 'App\\Http\\Controllers\\CustomFieldController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-fields.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'custom-fields',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'custom-fields.store',
        'uses' => 'App\\Http\\Controllers\\CustomFieldController@store',
        'controller' => 'App\\Http\\Controllers\\CustomFieldController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-fields.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-fields/{custom_field}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'custom-fields.show',
        'uses' => 'App\\Http\\Controllers\\CustomFieldController@show',
        'controller' => 'App\\Http\\Controllers\\CustomFieldController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-fields.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'custom-fields/{custom_field}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'custom-fields.edit',
        'uses' => 'App\\Http\\Controllers\\CustomFieldController@edit',
        'controller' => 'App\\Http\\Controllers\\CustomFieldController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-fields.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'custom-fields/{custom_field}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'custom-fields.update',
        'uses' => 'App\\Http\\Controllers\\CustomFieldController@update',
        'controller' => 'App\\Http\\Controllers\\CustomFieldController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'custom-fields.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'custom-fields/{custom_field}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'as' => 'custom-fields.destroy',
        'uses' => 'App\\Http\\Controllers\\CustomFieldController@destroy',
        'controller' => 'App\\Http\\Controllers\\CustomFieldController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'woocommerce.install' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'woocommerce-install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\AddonInstallController@woocommerceInstall',
        'controller' => 'App\\Http\\Controllers\\AddonInstallController@woocommerceInstall',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'woocommerce.install',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::egK4faiQbek6AuXh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'barcode-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\BarcodeGenerator@generateBarcode',
        'controller' => 'App\\Http\\Controllers\\BarcodeGenerator@generateBarcode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::egK4faiQbek6AuXh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gxROpIZeQwcjJkb4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'get-product-barcode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\BarcodeGenerator@fetchBarcodeProduct',
        'controller' => 'App\\Http\\Controllers\\BarcodeGenerator@fetchBarcodeProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::gxROpIZeQwcjJkb4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product_store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\ProductController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    '/update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'product_update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@updateProduct',
        'controller' => 'App\\Http\\Controllers\\ProductController@updateProduct',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => '/update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search_tags' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'search_tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'common',
          2 => 'auth',
          3 => 'active',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@productTags',
        'controller' => 'App\\Http\\Controllers\\ProductController@productTags',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'search_tags',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
