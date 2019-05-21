<?php

use Illuminate\Database\Seeder;

class VaahCmsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->seedPermissions();
        $this->seedRoles();

    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    function seedPermissions()
    {
        $list = [
            [
                'uid' => 'can_access_admin_section',
                'module' => 'vaahcms',
                'section' => 'admin',
                'name' => 'access section',
                'label' => 'Allow Admin Access',
                'details' => 'This will allow user to access admin control panel',
                'is_active' => 1,
            ],
        ];


        foreach($list as $item)
        {
            $exist = \DB::table( 'vh_permissions' )
                ->where( 'uid', $item['uid'] )
                ->first();

            if (!$exist){
                \DB::table( 'vh_permissions' )->insert( $item );
            }
        }

    }


    /**
     * Run the database seeds.
     *
     * @return void
     */
    function seedRoles()
    {
        $list = [
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'details' => 'Users who have admin roles has all the permission access and manage the data.',
                'is_active' => 1,
            ],
            [
                'name' => 'Registered',
                'slug' => 'registered',
                'details' => 'Users who have registered roles can access only public website.',
                'is_active' => 1,
            ],
        ];


        foreach($list as $item)
        {
            $exist = \DB::table( 'vh_roles' )
                ->where( 'slug', $item['slug'] )
                ->first();

            if (!$exist){
                \DB::table( 'vh_roles' )->insert( $item );
            }
        }

    }



}
