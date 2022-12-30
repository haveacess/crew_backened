<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_permissions')->insert([
            ['name' => 'collection.invite_new_users'],
            ['name' => 'collection.remove_users'],
            ['name' => 'collection.edit_user_permissions'],
            ['name' => 'collection.edit_collection_items'],
            ['name' => 'collection.confirm_invoices']
        ]);
    }
}
