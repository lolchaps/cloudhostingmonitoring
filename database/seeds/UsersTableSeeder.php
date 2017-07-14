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
	    $permission = App\Permission::create([
	    	'name' => 'admin',
        	'label' => 'Admin',
        ]);

        $companyCategory = App\CompanyCategory::create([
	    	'name' => 'customer',
        	'label' => 'Customer',
        ]);

        $company = $companyCategory->company()->create([
            'name' => 'Horizon IT Solutions',
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
            'email' => 'john@hits.ie',
        ]);

        $user = $department->users()->create([
            'name' => 'John',
            'surname' => 'Cotter',
            'email' => 'john@hits.ie',
            'mobile' => '876629308',
            'username' => 'jcotter',
            'password' => $password = bcrypt('123456'),
            'signature' => 'BLOB',
            'mobile_id' => 'ER42455634ERDSE',
        ]);

        $user->givePermissionTo($permission);
    }
}
