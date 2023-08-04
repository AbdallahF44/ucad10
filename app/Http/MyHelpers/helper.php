<?php

use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Request;
use App\Models\PermissionModels\Adminpermission;
use Illuminate\Support\Arr;

/*if (!function_exists('setting')) {
	function setting() {
		return \App\Model\Setting::orderBy('id', 'desc')->first();
	}
}

*/
if (!function_exists('getSiteName')) {
    function getSiteName($default = 'My Site') {

        $currentLanguage = app()->getLocale();
        $key = ($currentLanguage === 'ar') ? 'اسم الموقع' : 'site_name';

        return \App\Models\Setting::getValueByKey($key, $default);
    }
}


if (!function_exists('aurl')) {
    function aurl($url = null)
    {
        return url($url);
    }
}

if (!function_exists('admin')) {
    function admin()
    {
        return auth()->guard('admin');
    }
}

if (!function_exists('active_menu')) {
    function active_menu($link)
    {

        if (preg_match('/' . $link . '/i', Request::segment(2))) {
            return ['menu-open', 'display:block'];
        } else {
            return ['', ''];
        }
    }
}

if (!function_exists('lang')) {
    function lang()
    {
        if (session()->has('lang')) {
            return session('lang');
        } else {
            //session()->put('lang', setting()->main_lang);
            return 'ar';
        }
    }
}

if (!function_exists('direction')) {
    function direction()
    {
        if (session()->has('lang')) {
            if (session('lang') == 'ar') {
                return 'rtl';
            } else {
                return 'ltr';
            }
        } else {
            return 'rtl';
        }
    }
}


/////// Validate Helper Functions ///////
if (!function_exists('v_image')) {
    function v_image($ext = null)
    {
        if ($ext === null) {
            return 'image|mimes:jpg,jpeg,png,gif,bmp';
        } else {
            return 'image|mimes:' . $ext;
        }
    }
}

if (!function_exists('words')) {
    /**
     * Limit the number of words in a string.
     *
     * @param  string  $value
     * @param  int     $words
     * @param  string  $end
     * @return string
     */
    function words($value, $words = 100, $end = '...')
    {
        return \Illuminate\Support\Str::words($value, $words, $end);
    }
}

if (!function_exists('userCan')) {


    function userCan($permissionID = null)
    {

        if ($permissionID != null) :
            if (auth('admin')->user()->isSuperAdmin()) {
                return true;
            }
        endif;


        $types = auth("admin")->user()->adminTypes;


        $arr = [];
        for ($i = 0; $i < count($types); $i++) {
            $permissions = $types[$i]->adminPermissions;

            for ($j = 0; $j < count($permissions); $j++) {
                array_push($arr, $permissions[$j]->id);
            }
        }


        $extraPermissions =  getUserExtraPermissions();


        $permissionsIDS = array_map(function ($permission) {
            return $permission['id'];
        }, $extraPermissions);

        $arr =  array_merge($permissionsIDS, $arr);


        $assArr = array_unique($arr);

        $arr = [];

        foreach ($assArr as $ar) {
            array_push($arr, $ar);
        }

        if ($permissionID == null) {
            return $arr;
        } else {
            return in_array($permissionID, $arr);
        }
    }
}


if (!function_exists('getUserPermissionNames')) {

    function getUserPermissionNames()
    {
        if (count(userCan()) == 0) {
            return;
        }

        //fetching permission ids
        $permissionIds = userCan();

        //temp array for permission objects
        $permissionObject = [];

        foreach ($permissionIds as $id) {
            $permssion = Adminpermission::find($id);
            array_push($permissionObject, $permssion);
        }


        //temp array for permission name
        $permissionnames = [];
        foreach ($permissionObject as $item) {
            array_push($permissionnames, $item->permissionname);
        }

        return my_unique_objects_array($permissionnames);
    }
}




if (!function_exists('my_unique_objects_array')) {

    function my_unique_objects_array($array)
    {
        //temp array to store unique objects
        $tempArray = [];

        $idArray = [];

        foreach ($array as $item) {
            if (!in_array($item->id, $idArray)) {
                array_push($idArray, $item->id);
                array_push($tempArray, $item);
            }
        }
        return $tempArray;
    }
}


if (!function_exists('getUserExtraPermissions')) {

    function getUserExtraPermissions()
    {

        //get all permissions from extra permissions
        $permissions = auth('admin')->user()->extraPermissions;

        return collect($permissions)->toArray();
    }
}


if (!function_exists('displayIfUserHasPermissionInRole')) {

    function displayIfUserHasPermissionInRole(string $guardName ,  ...$roleNames)
    {
        $userPermissions = auth('employee')->user()->getAllPermissions()->pluck('id')->all();

        $rolePermissions = [];

        foreach($roleNames as $roleName){
         array_push($rolePermissions ,Role::findByName($roleName, $guardName)->permissions->pluck('id')->all());

        }

        $rolePermissions = Arr::collapse($rolePermissions);


        foreach ($userPermissions as $userPermission) {

            if (in_array($userPermission, $rolePermissions)) {

                return true;
            }
        };

        return false;
    }
}




if (!function_exists('delete_subArray')) {


    function delete_subArray($array, $deletedArray)
    {

        if (count($array) < count($deletedArray)) {

            throw new Exception('First parameter array length must be bigger than or equal second array parameter');
        }


        //fetch undesired objects IDs
        $deletedArrayIDs = array_map(function ($value) {
            return $value['id'];
        }, $deletedArray);


        //filter array from undesired objects using deletedArrayIDs array
        $wantedObject = array_filter($array, function ($value) use ($deletedArrayIDs) {
            return !in_array($value['id'], $deletedArrayIDs);
        });

        $wantedObjectArray = [];

        foreach ($wantedObject as $object) {
            array_push($wantedObjectArray, $object);
        }


        return $wantedObjectArray;
    }




    if (!function_exists('userCan')) {
        function userCan($permissionID = null)
        {

            if ($permissionID != null) :
                if (auth('admin')->user()->isSuperAdmin()) {
                    return true;
                }
            endif;


            $types = auth("admin")->user()->adminTypes;
            $arr = [];
            for ($i = 0; $i < count($types); $i++) {
                $permissions = $types[$i]->adminPermissions;

                for ($j = 0; $j < count($permissions); $j++) {
                    array_push($arr, $permissions[$j]->id);
                }
            }

            $extraPermissions =  getUserExtraPermissions();


            $permissionsIDS = array_map(function ($permission) {
                return $permission['id'];
            }, $extraPermissions);

            $arr =  array_merge($permissionsIDS, $arr);


            $assArr = array_unique($arr);

            $arr = [];

            foreach ($assArr as $ar) {
                array_push($arr, $ar);
            }

            if ($permissionID == null) {
                return $arr;
            } else {
                return in_array($permissionID, $arr);
            }
        }
    }


    if (!function_exists('getUserPermissionNames')) {

        function getUserPermissionNames()
        {
            if (count(userCan()) == 0) {
                return;
            }

            //fetching permission ids
            $permissionIds = userCan();

            //temp array for permission objects
            $permissionObject = [];

            foreach ($permissionIds as $id) {
                $permssion = Adminpermission::find($id);
                array_push($permissionObject, $permssion);
            }


            //temp array for permission name
            $permissionnames = [];
            foreach ($permissionObject as $item) {
                array_push($permissionnames, $item->permissionname);
            }

            return my_unique_objects_array($permissionnames);
        }
    }




    if (!function_exists('my_unique_objects_array')) {

        function my_unique_objects_array($array)
        {
            //temp array to store unique objects
            $tempArray = [];

            $idArray = [];

            foreach ($array as $item) {
                if (!in_array($item->id, $idArray)) {
                    array_push($idArray, $item->id);
                    array_push($tempArray, $item);
                }
            }
            return $tempArray;
        }
    }


    if (!function_exists('getUserExtraPermissions')) {

        function getUserExtraPermissions()
        {

            //get all permissions from extra permissions
            $permissions = auth('admin')->user()->extraPermissions;

            return collect($permissions)->toArray();
        }
    }



    if (!function_exists('delete_subArray')) {


        function delete_subArray($array, $deletedArray)
        {

            if (count($array) < count($deletedArray)) {

                throw new Exception('First parameter array length must be bigger than or equal second array parameter');
            }


            //fetch undesired objects IDs
            $deletedArrayIDs = array_map(function ($value) {
                return $value['id'];
            }, $deletedArray);


            //filter array from undesired objects using deletedArrayIDs array
            $wantedObject = array_filter($array, function ($value) use ($deletedArrayIDs) {
                return !in_array($value['id'], $deletedArrayIDs);
            });

            $wantedObjectArray = [];

            foreach ($wantedObject as $object) {
                array_push($wantedObjectArray, $object);
            }


            return $wantedObjectArray;
        }
    }
}
