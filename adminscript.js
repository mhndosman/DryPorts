document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('adminForm');
    const tripNumberInput = document.getElementById('tripNumber');

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(form);
            fetch('process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('تم حفظ البيانات بنجاح');
                } else {
                    alert('حدث خطأ أثناء حفظ البيانات');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('حدث خطأ في الاتصال');
            });
        });
    }

    if (tripNumberInput) {
        tripNumberInput.addEventListener('change', function() {
            const tripNo = this.value;
            fetch(`process.php?action=getDecisions&trip_no=${tripNo}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('trafficDecision').textContent = data.traffic ? 'مسموح' : 'غير مسموح';
                    document.getElementById('safetyDecision').textContent = data.safety ? 'مسموح' : 'غير مسموح';
                    document.getElementById('customDecision').textContent = data.custom ? 'مسموح' : 'غير مسموح';
                    
                    // Update other form fields
                    document.getElementById('companyName').value = data.com_name;
                    document.getElementById('tripDestination').value = data.trip_dest;
                    document.getElementById('tripDate').value = data.trip_date;
                    document.getElementById('tripAllow').checked = data.Trip_allow;
                } else {
                    alert('لم يتم العثور على بيانات للرحلة المحددة');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('حدث خطأ في الاتصال');
            });
        });
    }
});