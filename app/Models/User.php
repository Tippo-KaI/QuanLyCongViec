<?php

namespace App\Models; // khai báo namespace của class User, cho biết class này thuộc về thư mục app/Models trong ứng dụng Laravel

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // user kế thừa từ lớp Authenticatable, cung cấp các tính năng xác thực người dùng
    use HasFactory, Notifiable; // hasFactory tạo dữ liệu mẫu, Notifiable gửi thông báo

    /**
     * Các thuộc tính có thể gán hàng loạt.
     * @var list<string>
     */

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Các thuộc tính cần ẩn để tuần tự hóa.
     * @var list<string>
     */

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
