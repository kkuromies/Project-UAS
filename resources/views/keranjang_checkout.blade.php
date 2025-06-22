<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang - Jam</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }

        .header {
            background-color: white;
            padding: 12px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 20px;
            font-weight: bold;
            color: #1a73e8;
        }

        .logo::before {
            content: "G";
            width: 32px;
            height: 32px;
            background: linear-gradient(45deg, #4285f4, #34a853);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .kategori-dropdown {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #666;
            cursor: pointer;
            font-size: 14px;
        }

        .search-container {
            flex: 1;
            max-width: 600px;
            margin: 0 20px;
        }

        .search-box {
            width: 100%;
            padding: 10px 40px 10px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 25px;
            font-size: 14px;
            outline: none;
        }

        .search-box:focus {
            border-color: #1a73e8;
        }

        .search-container {
            position: relative;
        }

        .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #666;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 12px;
            color: #666;
        }

        .cart-icon {
            position: relative;
            cursor: pointer;
        }

        .cart-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background: #ff4444;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 11px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-categories {
            background: white;
            padding: 10px 20px;
            display: flex;
            gap: 25px;
            font-size: 13px;
            color: #666;
            border-bottom: 1px solid #e0e0e0;
        }

        .nav-categories a {
            text-decoration: none;
            color: #666;
            transition: color 0.3s;
        }

        .nav-categories a:hover {
            color: #1a73e8;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            gap: 30px;
        }

        .main-content {
            flex: 2;
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .page-title {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 25px;
            color: #333;
        }

        .select-all {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e0e0e0;
        }

        .checkbox {
            width: 18px;
            height: 18px;
            border: 2px solid #ddd;
            border-radius: 3px;
            cursor: pointer;
            position: relative;
        }

        .checkbox.checked {
            background: #1a73e8;
            border-color: #1a73e8;
        }

        .checkbox.checked::after {
            content: "✓";
            position: absolute;
            color: white;
            font-size: 12px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .store-section {
            margin-bottom: 25px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
        }

        .store-header {
            background: #f8f9fa;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 500;
        }

        .product-item {
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .product-item:last-child {
            border-bottom: none;
        }

        .product-image {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            object-fit: cover;
            border: 1px solid #e0e0e0;
        }

        .product-details {
            flex: 1;
        }

        .product-category {
            font-size: 12px;
            color: #666;
            margin-bottom: 5px;
        }

        .product-title {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
            line-height: 1.4;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .current-price {
            font-size: 16px;
            font-weight: 600;
            color: #333;
        }

        .discount {
            background: #ff4444;
            color: white;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 11px;
            font-weight: 500;
        }

        .product-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .delete-btn {
            background: none;
            border: none;
            color: #999;
            cursor: pointer;
            font-size: 18px;
            padding: 5px;
        }

        .delete-btn:hover {
            color: #ff4444;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            overflow: hidden;
        }

        .qty-btn {
            background: white;
            border: none;
            width: 35px;
            height: 35px;
            cursor: pointer;
            font-size: 16px;
            color: #666;
        }

        .qty-btn:hover {
            background: #f5f5f5;
        }

        .qty-input {
            width: 45px;
            text-align: center;
            border: none;
            border-left: 1px solid #e0e0e0;
            border-right: 1px solid #e0e0e0;
            height: 35px;
            font-size: 14px;
        }

        .sidebar {
            flex: 1;
            background: white;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            height: fit-content;
            position: sticky;
            top: 20px;
        }

        .sidebar-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .summary-row.total {
            font-size: 16px;
            font-weight: 600;
            padding-top: 15px;
            border-top: 1px solid #e0e0e0;
            margin-top: 15px;
        }

        .checkout-btn {
            width: 100%;
            background: #1a73e8;
            color: white;
            border: none;
            padding: 15px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .checkout-btn:hover {
            background: #1557b0;
        }

        .recommendations {
            margin-top: 40px;
        }

        .recommendations-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .book-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
        }

        .book-card {
            position: relative;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .book-card:hover {
            transform: translateY(-5px);
        }

        .book-cover {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .wishlist-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(255,255,255,0.9);
            border: none;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            color: #666;
        }

        .wishlist-btn:hover {
            background: white;
            color: #ff4444;
        }

        .delete-all-btn {
            background: none;
            border: none;
            color: #666;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
            margin-left: auto;
        }

        .delete-all-btn:hover {
            color: #ff4444;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                padding: 10px;
            }
            
            .header {
                padding: 10px 15px;
            }
            
            .search-container {
                margin: 0 10px;
            }
            
            .nav-categories {
                overflow-x: auto;
                white-space: nowrap;
            }
            
            .product-item {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .product-actions {
                width: 100%;
                justify-content: space-between;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <main class="main-content">
            <h1 class="page-title">Keranjang</h1>
            
            <div class="select-all">
                <div class="checkbox checked" onclick="toggleSelectAll()"></div>
                <span>Semua</span>
                <button class="delete-all-btn" onclick="deleteAll()">
                    🗑️ Hapus
                </button>
            </div>

            <div class="store-section">
                
                <div class="product-item">
                    <div class="checkbox checked"></div>
                    <img src="{{ asset('/storage/products/jL9iEA5OiX4e5ztdnPGr4zOMpB5inJNAZNBfavAn.png')}}" alt="Book Cover" class="product-image">
                    <div class="product-details">
                        <div class="product-category">Hard Cover</div>
                        <div class="product-title">The Psychology of Emotion</div>
                        <div class="product-price">
                            <span class="current-price">Rp85.000</span>
                        </div>
                    </div>
                    <div class="product-actions">
                        <button class="delete-btn" onclick="removeItem(1)">🗑️</button>
                        <div class="quantity-controls">
                            <button class="qty-btn" onclick="changeQty(-1)">-</button>
                            <input type="text" class="qty-input" value="1" readonly>
                            <button class="qty-btn" onclick="changeQty(1)">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <aside class="sidebar">
            <h2 class="sidebar-title">Ringkasan Keranjang</h2>
            <div class="summary-row">
                <span>Total Harga (1 Barang)</span>
                <span>Rp85.000</span>
            </div>
            <div class="summary-row total">
                <span>Subtotal</span>
                <span>Rp85.000</span>
            </div>
            <button class="checkout-btn" onclick="checkout()">Checkout</button>
        </aside>
    </div>

    <script>
        let cartData = {
            items: [
                {
                    id: 1,
                    title: "The Psychology of Emotion",
                    category: "Soft Cover",
                    price: 85000,
                    originalPrice: 85000,
                    quantity: 1,
                    selected: true
                }
            ],
            totalItems: 1,
            totalPrice: 85000,
            subtotal: 85000
        };

        function toggleSelectAll() {
            const checkbox = document.querySelector('.select-all .checkbox');
            const isSelected = checkbox.classList.contains('checked');
            
            if (isSelected) {
                checkbox.classList.remove('checked');
                document.querySelectorAll('.checkbox').forEach(cb => cb.classList.remove('checked'));
            } else {
                checkbox.classList.add('checked');
                document.querySelectorAll('.checkbox').forEach(cb => cb.classList.add('checked'));
            }
            updateSummary();
        }

        function changeQty(change) {
            const qtyInput = document.querySelector('.qty-input');
            let currentQty = parseInt(qtyInput.value);
            currentQty += change;
            
            if (currentQty < 1) currentQty = 1;
            if (currentQty > 10) currentQty = 10;
            
            qtyInput.value = currentQty;
            cartData.items[0].quantity = currentQty;
            updateSummary();
        }

        function removeItem(itemId) {
            if (confirm('Apakah Anda yakin ingin menghapus item ini dari keranjang?')) {
                document.querySelector('.product-item').remove();
                cartData.items = [];
                updateSummary();
                
                if (cartData.items.length === 0) {
                    document.querySelector('.main-content').innerHTML = `
                        <h1 class="page-title">Keranjang</h1>
                        <div style="text-align: center; padding: 50px; color: #666;">
                            <div style="font-size: 48px; margin-bottom: 20px;">🛒</div>
                            <h3>Keranjang Anda kosong</h3>
                            <p>Silakan tambahkan produk ke keranjang</p>
                        </div>
                    `;
                }
            }
        }

        function deleteAll() {
            if (confirm('Apakah Anda yakin ingin menghapus semua item dari keranjang?')) {
                removeItem(1);
            }
        }

        function updateSummary() {
            const quantity = cartData.items[0]?.quantity || 0;
            const price = cartData.items[0]?.originalPrice || 0;
            const discount = cartData.items[0]?.discount || 0;
            
            const totalPrice = price * quantity;
            const totalDiscount = (price * discount / 100) * quantity;
            const subtotal = totalPrice - totalDiscount;
            
            if (cartData.items.length > 0) {
                document.querySelector('.sidebar').innerHTML = `
                    <h2 class="sidebar-title">Ringkasan Keranjang</h2>
                    <div class="summary-row">
                        <span>Total Harga (${quantity} Barang)</span>
                        <span>Rp${totalPrice.toLocaleString('id-ID')}</span>
                    </div>
                    <div class="summary-row total">
                        <span>Subtotal</span>
                        <span>Rp${subtotal.toLocaleString('id-ID')}</span>
                    </div>
                    <button class="checkout-btn" onclick="checkout()">Checkout</button>
                `;
            } else {
                document.querySelector('.sidebar').innerHTML = `
                    <h2 class="sidebar-title">Ringkasan Keranjang</h2>
                    <div style="text-align: center; color: #666; padding: 20px;">
                        Keranjang kosong
                    </div>
                `;
            }
        }

        function checkout() {
    if (cartData.items.length === 0) {
        alert('Keranjang Anda kosong!');
        return;
    }
    
    const quantity = cartData.items[0].quantity;
    const productName = cartData.items[0].title;
    const subtotal = cartData.items[0].originalPrice * quantity;

    // Create a message for WhatsApp
    const message = `Saya ingin memesan ${quantity} ${productName} dengan total Rp${subtotal.toLocaleString('id-ID')}.`;
    const whatsappUrl = `https://wa.me/085860090719?text=${encodeURIComponent(message)}`;

    // Redirect to WhatsApp
    window.open(whatsappUrfunction checkout() {
    if (cartData.items.length === 0) {
        alert('Keranjang Anda kosong!');
        return;
    }
    
    const quantity = cartData.items[0].quantity;
    const productName = cartData.items[0].title;
    const subtotal = cartData.items[0].originalPrice * quantity;

    // Create a message for WhatsApp
    const message = `Saya ingin memesan ${quantity} ${productName} dengan total Rp${subtotal.toLocaleString('id-ID')}.`;
    const whatsappUrl = `https://wa.me/085860090719?text=${encodeURIComponent(message)}`;

    // Redirect to WhatsApp
    window.open(whatsappUrl, '_blank');
}l, '_blank');
}

        // Initialize
        updateSummary();
    </script>
</body>
</html>

ketika klik checkout masuk ke whatsapp