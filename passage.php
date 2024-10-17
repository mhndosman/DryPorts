<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة العبور - إدارة الميناء البري</title>
    <link href="bootstrapmin.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <h1>صفحة العبور</h1>
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
                    <li class="nav-item"><a class="nav-link" href="company.php">الشركة</a></li>
                    <li class="nav-item"><a class="nav-link active" href="passage.php">العبور</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container mt-4">
        <h2>التحقق من العبور</h2>
        <p>قم بإدخال الرقم التسلسلي للراكب للتحقق من إمكانية العبور.</p>
        <form id="passageForm" class="mt-4">
            <div class="mb-3">
                <label for="passengerSerial" class="form-label">الرقم التسلسلي للراكب</label>
                <input type="text" id="passengerSerial" name="Pass_serial" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">التحقق</button>
        </form>
        <div id="passageResult" class="mt-4">
            <!-- Results will be displayed here -->
        </div>
    </main>
    <footer class="bg-light text-center py-3 mt-5">
        <p>&copy; 2024 إدارة الميناء البري. جميع الحقوق محفوظة.</p>
    </footer>
    <script src="bootstrapbundle.js"></script>
    <script src="script.js"></script>
</body>
</html>