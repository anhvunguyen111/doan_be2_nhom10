<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [ 'type_id' => 1,
              'product_name' => 'Combo Sashimi Special 10B',
              'description' => 'Thành phần :

              Cá hồi Nauy 150gr | Cá cam 60gr | Cá trích ép trứng 96gr
              Sò đỏ Canada 60gr | Cồi sò điệp Nhật 60gr | Bạch tuộc Nhật 48gr
              Bào ngư Hàn Quốc sống 1 con | Hàu Nhật 1 con | Trứng cá hồi 15gr
              Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách : Thích hợp khoảng 3 - 4 người ăn.Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              
              Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
              'image' => '10b_88c0db8d5d14483d93dc3d0852cc66d9_grande.jpg',
              'price' => 875000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
        ],
            [ 'type_id' => 1,
              'product_name' => 'Sashimi Sò Dương',
              'description' => 'Thành phần :

              ▪️ Sò Dương 10 miếng
              ▪️ Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách :
              
              ▪️ Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              ▪️ Thích hợp khoảng 1-2 người dùng.
              Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn.',
              'image' => 'sashimi_so_duong_1_4c337f03054d4b4b941669349305b3bf_grande.jpg',
              'price' => 125000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
        ],
            [ 'type_id' => 1,
              'product_name' => 'Sashimi Hàu Nhật',
              'description' => 'Thành phần: mang đến cho bạn một bữa ăn chuẩn Nhật:

              ▪️ Hàu Nhật (6 con)
              
              ▪️ Gia vị ăn kèm :Sốt Hành,wasabi, nước tương Nhật, Chanh
              
              Quy cách : Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              
              Hướng dẫn sử dụng: Dùng ngay khi nhận hàng hoặc làm lạnh 10-15phút sẽ ngon hơn.',
              'image' => 'hau_ssm1_d494c259a8384ca4831bfad0a3e9c767_grande.jpg',
              'price' => 260000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
        ],
            [ 'type_id' => 1,
              'product_name' => 'Combo Sashimi Special 4',
              'description' => 'Thành phần :

              ▪️ Cá Hồi Nauy 450gr | Sò đỏ Canada 100gr | Trứng cá hồi 10gr
              ▪️ Cá trích ép trứng 192gr | Sò điệp Nhật 60gr
              ▪️ Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách : Thích hợp khoảng 3 - 4 người ăn.Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              
              Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn.',
              'image' => 'spec-03_bd8e3027e16644ffa81824f793cbaf43_grande.jpg',
              'price' => 940000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
        ],
            [ 'type_id' => 1,
              'product_name' => 'Sashimi Cá Hồi Special',
              'description' => 'Thành phần :

              ▪️ Cá Hồi Nauy 650gr
              ▪️ Trứng cá hồi 
              ▪️ Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách : Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              
              Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
              'image' => 'spec02-01_5055c3e03a3e4583b034a412a2727b17_medium.jpg',
              'price' => 980000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
        ],
            [ 'type_id' => 1,
              'product_name' => 'Sashimi Cá Hồi 500g',
              'description' => 'Thành phần :

              ▪️ Cá Hồi Nauy 500gr
              ▪️ Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách : Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              
              Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
              'image' => 'SashimiCáHồi500g.jpg',
              'price' => 680000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
        ],
            [ 'type_id' => 1,
              'product_name' => 'Sashimi Cá Hồi 150g',
              'description' => 'Thành phần :

              ▪️ Cá Hồi Nauy 150gr
              ▪️ Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách : Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              
              Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
              'image' => 'SashimiCáHồi150g.jpg',
              'price' => 210000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
        ],
            [ 'type_id' => 1,
              'product_name' => 'Combo Sashimi 3C',
              'description' => 'Thành phần:

              ▪️ Cá hồi Nauy (150gr) | Cá trích ép trứng (80gr) | Sò đỏ Canada (100gr)
              ▪️ Gia vị ăn kèm: wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách: Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              
              Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn.',
              'image' => 'ComboSashimi3C.jpg',
              'price' => 380000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
        ],
            [ 'type_id' => 1,
              'product_name' => 'Sashimi Cá Hồi 300g',
              'description' => 'Thành phần :

              ▪️ Cá Hồi Nauy 300gr
              ▪️ Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách : Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày.
              
              Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
              'image' => 'SashimiCáHồi300g.jpg',
              'price' => 410000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
        ],
            [ 'type_id' => 1,
              'product_name' => 'Combo Sashimi 6B',
              'description' => 'Thành phần:

              ▪️ Cá hồi Nauy 150gr | Cá trích ép trứng 160gr | Sò đỏ Canada 60gr
              ▪️ Cồi sò điệp Nhật 60gr | Bạch tuộc Nhật 40gr | Trứng cá hồi 10gr
              ▪️ Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách : Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              
              Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn.',
              'image' => 'ComboSashimi6B.jpg',
              'price' => 650000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
        ],
            [ 'type_id' => 1,
              'product_name' => 'Combo Sashimi 6B',
              'description' => 'Thành phần:

              ▪️ Cá hồi Nauy 150gr | Cá trích ép trứng 160gr | Sò đỏ Canada 60gr
              ▪️ Cồi sò điệp Nhật 60gr | Bạch tuộc Nhật 40gr | Trứng cá hồi 10gr
              ▪️ Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách : Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              
              Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn.',
              'image' => 'ComboSashimi6B.jpg',
              'price' => 650000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
      ],
            [ 'type_id' => 2,
              'product_name' => 'Sushi Box 10A',
              'description' => 'Thành Phần:

              Salad 
              Cá Hồi | Bạch Tuộc Nhật| Sò Đỏ| Lươn Nhật| Thanh Cua| Tôm Thẻ Sushi| Đầu Mực| Maki Cá Hồi| 
              Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách : Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              
              Hướng dẫn sử dụng : Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
              'image' => 'SushiBox10A.jpg',
              'price' => 170000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
            
    ],


              [ 'type_id' => 2,
              'product_name' => 'Sushi Box 9A',
              'description' => 'Thành Phần:

              Salad 
              Cá Trích Ép Trứng| Cá Hồi| Sò Đỏ| Lươn Nhật| Thanh Cua| Đầu Mực| Tôm Thẻ Sushi| Cơm Nhật
              Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách : Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
              
              Hướng dẫn sử dụng : Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
              'image' => 'SushiBox9A.jpg',
              'price' => 160000,
              'is_featured' => 1,
              'create_date' => DATE(NOW())
              ],



              [ 'type_id' => 2,
              'product_name' => 'Sushi Box 8A',
              'description' => 'Thành Phần:

              Salad  
              Cá Hồi| Sò Đỏ| Lươn Nhật| Thanh Cua| Tôm Thẻ Sushi| Maki Cá Hồi
              Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
              Quy cách : Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 

            Hướng dẫn sử dụng: Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn.',
            'image' => 'SushiBox8A.jpg',
            'price' => 145000,
            'is_featured' => 1,
            'create_date' => DATE(NOW())
            ],


            [ 'type_id' => 2,
            'product_name' => 'Sushi Box 4B',
            'description' => 'Thành Phần:

            Salad 
            Cá Trích Ép Trứng| Cá Hồi| Sò Đỏ| Bạch Tuộc Nhật| Maki Cá Hồi
            Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
            Quy cách : Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
            
            Hướng dẫn sử dụng: Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
            'image' => 'SushiBox4B.jpg',
            'price' => 75000,
            'is_featured' => 1,
            'create_date' => DATE(NOW())
            ],

            [ 'type_id' => 2,
            'product_name' => 'Sushi Box 4A',
            'description' => 'Thành Phần:

            Salad 
            Cheese| Cá Hồi| Tôm Thẻ Sushi| Bạch Tuộc Nhật| Lươn Nhật| Maki Cá Hồi
            Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
            Quy cách : Phù hợp 1 người ăn. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
            
            Hướng dẫn sử dụng : Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
          'image' => 'SushiBox4A.jpg',
          'price' => 75000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],

          [ 'type_id' => 2,
          'product_name' => 'Sushi 6M',
          'description' => 'Thành Phần:

          ▪️ Cá hồi Nauy ( phần lưng)| Bụng cá hồi khè 
          ▪️ Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
            Quy cách : Phù hợp 1-2 người ăn. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 

          Hướng dẫn sử dụng : Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
          'image' => 'Sushi6M.jpg',
          'price' => 180000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],


          [ 'type_id' => 2,
          'product_name' => 'Sushi 9B',
          'description' => 'Thành Phần:

          Cá hồi Nauy cheese| Bụng cá hồi khè| Bạch tuộc Nhật| Cá trích ép trứng| Thanh cua| Sò đỏ Canada| Tôm thẻ cheese| Lươn Nhật| Đầu mực
          Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
          Quy cách : Phù hợp 2-3 người ăn. Đóng hộp, bảo quản lạnh khép kín trong suốt quá trình vận chuyển.

          Hướng dẫn sử dụng: Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
          'image' => 'Sushi9B.jpg',
          'price' => 245000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],


          [ 'type_id' => 2,
          'product_name' => 'Sushi 6X',
          'description' => 'Thành Phần:

          Cá hồi Nauy| Sò đỏ Canada| Thanh cua| Tôm thẻ| Cá trích ép trứng| Bạch tuộc Nhật| 
          Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
          Quy cách : Phù hợp 1 người ăn. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
          
          Hướng dẫn sử dụng: Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
          'image' => 'Sushi6X.jpg',
          'price' => 65000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],

          [ 'type_id' => 2,
          'product_name' => 'Sushi Mix 10A',
          'description' => 'Thành Phần:

          Bụng cá hồi Nauy khè| Bạch tuộc Nhật| Lươn Nhật| Tôm thẻ cheese| Maki cá hồi
          Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
          Quy cách : Phù hợp 1-2 người ăn.Đóng khay 8 miếng. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 

          Hướng dẫn sử dụng: Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
          'image' => 'SushiMix4A.jpg',
          'price' =>145000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],

          [ 'type_id' => 2,
          'product_name' => 'Sushi Mix 10A',
          'description' => 'Thành Phần:

          Bụng cá hồi Nauy khè| Bạch tuộc Nhật| Lươn Nhật| Tôm thẻ cheese| Maki cá hồi
          Gia vị ăn kèm : wasabi, gừng hồng, củ cải trắng, nước tương Nhật
          Quy cách : Phù hợp 1-2 người ăn.Đóng khay 8 miếng. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 

          Hướng dẫn sử dụng: Dùng ngay khi nhận hàng hoặc làm lạnh khoảng 15" trước khi ăn',
          'image' => 'SushiMix4A.jpg',
          'price' =>145000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],

          [ 'type_id' => 3,
          'product_name' => 'Salad Cá Hồi & Bơ',
          'description' => 'Thành Phần:

          Cá hồi| Bơ trái| Xà lách búp mỹ| Rong nho tosaka| Rong nho
          Kèm sẵn sốt mè rang
          Quy cách : Dùng cho 1 người ăn. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 

          Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng',
          'image' => 'SaladCaHoi&Bo.jpg',
          'price' =>125000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],

          
          [ 'type_id' => 3,
          'product_name' => 'Salad Da Giòn',
          'description' => 'Thành Phần:

          Da cá Hồi chiên giòn| Rong nho| Lolo xanh| Rau mầm, rong biển, cà chua & rong biển tosaka đỏ-xanh
          Kèm sẵn sốt Salad
          Quy cách : Dùng cho 1 người ăn. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 

          Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng',
          'image' => 'SaladDaGion.jpg',
          'price' =>60000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],



          [ 'type_id' => 3,
          'product_name' => 'Salad Rong Nho',
          'description' => 'Thành Phần:

          Rong nho|  Rau mầm, rong biển, cà chua & rong biển tosaka đỏ-xanh
          Kèm sẵn sốt mè rang
          Quy cách : Dùng cho 1 người ăn. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
          
          Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng',
          'image' => 'SaladRongNho.jpg',
          'price' =>60000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],



          [ 'type_id' => 3,
          'product_name' => 'Salad Cá Hồi',
          'description' => 'Thành Phần:

          Cá hồi Nauy| Rau mầm, rong biển, cà chua & rong biển tosaka đỏ-xanh
          Kèm sẵn sốt mè rang
          Quy cách : Dùng cho 1 người ăn. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
          
          Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng',
          'image' => 'SaladCaHoi.jpg',
          'price' =>99000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],

          
          [ 'type_id' => 3,
          'product_name' => 'Salad Thanh Cua',
          'description' => 'Thành Phần:

          Thanh cua| Rong biển tosaka xanh - đỏ, rau mầm, rong biển, cà chua,...
          Kèm sẵn sốt mè rang
          Quy cách : Dùng cho 1 người ăn. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày.

          Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng',
          'image' => 'SaladThanhCua.jpg',
          'price' =>60000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],


          [ 'type_id' => 3,
          'product_name' => 'Salad Mix 7A',
          'description' => 'Thành Phần:

          Cá hồi| Cá trích ép trứng vàng & đỏ| Tôm thẻ| Bạch tuộc Nhật| Thanh cua| Sò đỏ Canada| Các loại rau mầm, rong biển, cà chua, xà lách ...
          Kèm sẵn sốt mè rang
          Quy cách : Dùng cho 1 người ăn. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 

          Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng',
          'image' => 'SaladMix7A.jpg',
          'price' =>130000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],

          [ 'type_id' => 3,
          'product_name' => 'Salad Cá Trích Ép Trứng',
          'description' => 'Thành Phần:

          Cá trích ép trứng vàng & đỏ| Các loại rau mầm, rong biển, cà chua,...
          Kèm sẵn sốt mè rang
          Quy cách : Dùng cho 1 người ăn. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
          
          Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng',
          'image' => 'SaladCaTrichEpTrung.jpg',
          'price' =>130000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],


          [ 'type_id' => 3,
          'product_name' => 'Salad Bạch Tuộc Nhật',
          'description' => 'Thành Phần:

          Bạch tuộc Nhật| Rau mầm, rong biển, cà chua & rong biển tosaka đỏ-xanh
          Kèm sẵn sốt mè rang
          Quy cách : Dùng cho 1 người ăn. Đóng hộp đảm bảo VSATTP, kèm sẵn đũa. Sử dụng trong ngày. 
          
          Hướng dẫn sử dụng:  Dùng ngay khi nhận hàng',
          'image' => 'SaladBachTuocNhat.jpg',
          'price' =>99000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],



          [ 'type_id' => 4,
          'product_name' => 'Soup Miso',
          'description' => 'Thành Phần:

          Nước dùng rau củ, Sốt Miso, Đậu hủ non, Hành lá và Rong biển

          Quy cách: Đóng hộp giấy đảm bảo VSATTP, kèm sẵn muỗng. Sử dụng trong ngày.

          Hướng dẫn sử dụng: Dùng ngay khi nhận hàng hoặc làm nóng 1 phút trước khi ăn.',
          'image' => 'SoupMiso.jpg',
          'price' =>25000,
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],

          [ 'type_id' => 4,
          'product_name' => 'Combo 3 Gói Nước Tương',
          'description' => 'Thành Phần:

          Sản phẩm được dùng trực tiếp không qua chế biến, dùng làm nước chấm sashimi - sushi, nước sốt tẩm ướp cho các món ăn.

          Trọng Lượng: 3ml/ gói',
          'image' => 'Combo3GoiNuocTuong.jpg',
          'price' =>'3000',
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],

          [ 'type_id' => 4,
          'product_name' => 'Đậu Nành Nhật 100g',
          'description' => 'Thành Phần:

          Đậu Nành Nhật hấp nóng

          Quy Cách: Phù hợp 1-2 người ăn, đóng gói hộp nhựa đảm bảo VSATTP
          
          Hướng dẫn sử dụng: Dùng ngay khi nhận hàng',
          'image' => 'DauNanhNhat100g.jpg',
          'price' =>'25000',
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],



          [ 'type_id' => 4,
          'product_name' => 'Rong Nho Tươi',
          'description' => 'Thành Phần:

          Rong Nho Tươi 

          Quy Cách: Phù hợp 1-2 người ăn. Đóng hộp đảm bảo VSATTP

          Hướng dẫn sử dụng: Sử dụng liền ngay khi nhận món ăn. 

          ** Lưu ý : không kèm sốt ăn kèm',
          'image' => 'RongNhoTuoi.jpg',
          'price' =>'25000',
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],
          

          
          [ 'type_id' => 4,
          'product_name' => 'Rong Biển Trộn Mè 50g',
          'description' => 'Thành Phần:
          Rong Biển Trộn Mè 
          Quy Cách:  Phù hợp 1 người ăn. Đóng gói hộp đảm bảo VSATTP
          Hướng dẫn sử dụng: Dùng ngay khi nhận hàng ',
          'image' => 'RongBienTronMe50g.jpg',
          'price' =>'39000',
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],


          [ 'type_id' => 4,
          'product_name' => 'Lá Tía Tô (Phần)',
          'description' => 'Thành Phần:
          Lá Tía Tô 10 lá
          Quy cách: Phù hợp 1-2 người dùng. Đóng hộp đảm bảo VSATTP
          Hướng dẫn sử dụng: Dùng ngay khi nhận hàng',
          'image' => 'LaTiaTo.jpg',
          'price' =>'15000',
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ],


          [ 'type_id' => 4,
          'product_name' => '[ YOChef ] Sốt Thái 100gr',
          'description' => 'Thành Phần:
          Wasabi| Đường| nước mắm|  muối|  ớt| chanh|  tắc| tương ớt| hành|  tỏi.
          Gợi ý hải sản phù hợp : dùng kèm nhiều loại hải sản  
          Hướng dẫn sử dụng : Ngon nhất để ăn với hải sản sống :  tôm, cá hồi....,
          Bảo quản : tủ mát dưới 10 độ C. Tránh ánh nắng trực tiếp, HSD: 7 ngày',
          'image' => 'SotThai.jpg',
          'price' =>'25000',
          'is_featured' => 1,
          'create_date' => DATE(NOW())
          ]

          
         ]);
    }
}
