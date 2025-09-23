<?php

use App\Http\Controllers\AuthController;

rouute::post('/register', [AuthController::class, 'register']);
// rouute định nghĩa các đường dẫn 
// post định nghĩa phương thức gửi dữ liệu lên server
// khi có request POST tới /register thì gọi method register trong AuthController