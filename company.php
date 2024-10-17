<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الشركة - إدارة الميناء البري</title>
    <link href="bootstrapmin.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>صفحة الشركة</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php">الرئيسية</a></li>
                    <li class="nav-item"><a class="nav-link" href="admin.php">الإدارة</a></li>
                    <li class="nav-item"><a class="nav-link" href="traffic.php">الحركة</a></li>
                    <li class="nav-item"><a class="nav-link" href="safety.php">الأمن والسلامة</a></li>
                    <li class="nav-item"><a class="nav-link" href="custom.php">الجمارك</a></li>
                    <li class="nav-item"><a class="nav-link active" href="company.php">الشركة</a></li>
                    <li class="nav-item"><a class="nav-link" href="passage.php">العبور</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-4">
        <h2>إدارة الرحلات والركاب</h2>
        <p>قم بإدارة معلومات الرحلات والركاب.</p>
        <form id="companyForm" class="mt-4">
            <div class="mb-3">
                <label for="companyName" class="form-label">اسم الشركة</label>
                <select id="companyName" name="com_name" class="form-select">
                    <option value="">اختر الشركة</option>
                    <!-- PHP will populate this -->
                </select>
            </div>
            <div class="mb-3">
                <label for="tripNumber" class="form-label">رقم الرحلة</label>
                <input type="text" id="tripNumber" name="trip_no" class="form-control">
            </div>
            <div class="mb-3">
                <label for="tripDestination" class="form-label">وجهة الرحلة</label>
                <select id="tripDestination" name="trip_dest" class="form-select">
                    <option value="">اختر الوجهة</option>
                    <!-- PHP will populate this -->
                </select>
            </div>
            <div class="mb-3">
                <label for="tripDate" class="form-label">تاريخ الرحلة</label>
                <input type="date" id="tripDate" name="trip_date" class="form-control">
            </div>
            
            <h3 class="mt-4">معلومات الركاب</h3>
            <div id="passengersContainer">
                <div class="passenger-info mb-3 border p-3">
                    <h4>راكب 1</h4>
                    <div class="mb-3">
                        <label for="passengerName1" class="form-label">اسم الراكب</label>
                        <input type="text" id="passengerName1" name="Pass_name[]" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="passengerId1" class="form-label">رقم الهوية</label>
                        <input type="text" id="passengerId1" name="Pass_ID[]" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="passengerSeat1" class="form-label">رقم المقعد</label>
                        <input type="text" id="passengerSeat1" name="Pass_seat[]" class="form-control">
                    </div>
                </div>
            </div>
            <button type="button" id="addPassenger" class="btn btn-secondary mb-3">إضافة راكب</button>
            <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
        </form>
    </main>
    <footer class="bg-light text-center py-3 mt-5">
        <p>&copy; 2024 إدارة الميناء البري. جميع الحقوق محفوظة.</p>
    </footer>
    <script src="bootstrapbundle.js"></script>
    <script src="companyscript.js"></script>
</body>
</html>