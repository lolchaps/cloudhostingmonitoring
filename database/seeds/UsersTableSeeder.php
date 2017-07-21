<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    App\Permission::create([
            'name' => 'admin',
            'label' => 'Admin',
        ]);

        App\Permission::create([
	    	'name' => 'reports', 
            'label' => 'Reports',
        ]);

        $companyCategory = App\CompanyCategory::create([
	    	'name' => 'customer',
        	'label' => 'Customer',
        ]);

        $company = $companyCategory->company()->create([
            'name' => 'GO Cloud Solutions',
            'address' => 'address',
            'town' => 'town',
            'city' => 'city',
            'post_code' => 'post code',
            'zip' => 'zip',
            'country' => 'country',
            'phone' => 'phone',
            'fax' => 'fax',
            'website' => 'website',
            'email' => 'email',
            'facebook' => 'facebook',
            'twitter' => 'twitter',
        ]);

        $department = $company->department()->create([
            'description' => 'Sales',
            'email' => 'john@gocloud.ie',
        ]);

        $user = $department->users()->create([
            'name' => 'John',
            'surname' => 'Cotter',
            'email' => 'john@gocloud.ie',
            'mobile' => '876629308',
            'username' => 'jcotter',
            'password' => $password = bcrypt('123456'),
            'signature' => 'BLOB',
            'mobile_id' => 'ER42455634ERDSE',
        ]);

        $user->permissions()->attach([1, 2]);
    }
}
