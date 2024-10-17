<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الحركة - إدارة الميناء البري</title>
    <link href="bootstrapmin.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>صفحة الحركة</h1>
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
                    <li class="nav-item"><a class="nav-link active" href="traffic.php">الحركة</a></li>
                    <li class="nav-item"><a class="nav-link" href="safety.php">الأمن والسلامة</a></li>
                    <li class="nav-item"><a class="nav-link" href="custom.php">الجمارك</a></li>
                    <li class="nav-item"><a class="nav-link" href="company.php">الشركة</a></li>
                    <li class="nav-item"><a class="nav-link" href="passage.php">العبور</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-4">
        <h2>فحص حركة المركبات</h2>
        <p>قم بإدخال بيانات الرحلة وفحص المركبة.</p>
        <form id="trafficForm" class="mt-4">
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
                <input type="checkbox" id="frontlights" name="frontlights" class="form-check-input">
                <label for="frontlights" class="form-check-label">الأضواء الأمامية</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="backlights" name="backlights" class="form-check-input">
                <label for="backlights" class="form-check-label">الأضواء الخلفية</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="frontcontact" name="frontcontact" class="form-check-input">
                <label for="frontcontact" class="form-check-label">الإشارات الأمامية</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="backcontact" name="backcontact" class="form-check-input">
                <label for="backcontact" class="form-check-label">الإشارات الخلفية</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="frontglass" name="frontglass" class="form-check-input">
                <label for="frontglass" class="form-check-label">الزجاج الأمامي</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="backglass" name="backglass" class="form-check-input">
                <label for="backglass" class="form-check-label">الزجاج الخلفي</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="sideglass" name="sideglass" class="form-check-input">
                <label for="sideglass" class="form-check-label">الزجاج الجانبي</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="licence" name="licence" class="form-check-input">
                <label for="licence" class="form-check-label">الترخيص</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="driverlicence" name="driverlicence" class="form-check-input">
                <label for="driverlicence" class="form-check-label">رخصة السائق</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="tires" name="tires" class="form-check-input">
                <label for="tires" class="form-check-label">الإطارات</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="appearence" name="appearence" class="form-check-input">
                <label for="appearence" class="form-check-label">الهيئة الكلية</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" id="tripAllow" name="Trip_allow" class="form-check-input">
                <label for="tripAllow" class="form-check-label">السماح بالرحلة</label>
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