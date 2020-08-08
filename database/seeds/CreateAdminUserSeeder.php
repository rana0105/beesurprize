<?php
  
use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Morshed Khan Rana',
            'username' => 'rana0105',
            'email' => 'admin@gmail.com',
            'phone' => '01917919032',
            'role_id' => 1,
            'user_type' => 'Super Admin',
            'user_status' => 'All',
            'password' => bcrypt('12345678')
        ]);
  
        $role = Role::create(['name' => 'Super Admin']);
   
        $permissions = Permission::pluck('id', 'id')->all();
  
        $role->syncPermissions($permissions);
   
        $user->assignRole([$role->id]);
    }
}
