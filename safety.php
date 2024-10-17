<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الأمن والسلامة - إدارة الميناء البري</title>
    <link href="bootstrapmin.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>صفحة الأمن والسلامة</h1>
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
                    <li class="nav-item"><a class="nav-link active" href="safety.php">الأمن والسلامة</a></li>
                    <li class="nav-item"><a class="nav-link" href="custom.php">الجمارك</a></li>
                    <li class="nav-item"><a class="nav-link" href="company.php">الشركة</a></li>
                    <li class="nav-item"><a class="nav-link" href="passage.php">العبور</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-4">
        <h2>فحص الأمن والسلامة</h2>
        <p>قم بإدخال بيانات الرحلة وإجراء فحص الأمن والسلامة.</p>
        <form id="safetyForm" class="mt-4">
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
            <div class="mb-3 form-check">
                <input type="checkbox" id="tripAllow" name="Trip_allow" class="form-check-input">
                <label for="tripAllow" class="form-check-label">السماح بالرحلة</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="drugs" name="drugs" class="form-check-input">
                <label for="drugs" class="form-check-label">أدوية - مخدرات</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="pannedpass" name="pannedpass" class="form-check-input">
                <label for="pannedpass" class="form-check-label">أفراد محظورين</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="dangerous" name="dangerous" class="form-check-input">
                <label for="dangerous" class="form-check-label">مواد خطرة</label>
            </div>
            <div class="mb-3">
                <label for="notes" class="form-label">ملاحظات</label>
                <textarea id="notes" name="notes" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
        </form>
    </main>
    <footer class="bg-light text-center py-3 mt-5">
        <p>&copy; 2024 إدارة الميناء البري. جميع الحقوق محفوظة.</p>
    </footer>
    <script src="bootstrapbundle.js"></script>
    <script src="script.js"></script>
</body>
</html>