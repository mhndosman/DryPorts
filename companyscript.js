document.addEventListener('DOMContentLoaded', function() {
    // Existing code...

    // Company page specific code
    const companyForm = document.getElementById('companyForm');
    const addPassengerButton = document.getElementById('addPassenger');
    const passengersContainer = document.getElementById('passengersContainer');

    if (companyForm && addPassengerButton && passengersContainer) {
        let passengerCount = 1;

        addPassengerButton.addEventListener('click', function() {
            passengerCount++;
            const newPassenger = document.createElement('div');
            newPassenger.className = 'passenger-info mb-3 border p-3';
            newPassenger.innerHTML = `
                <h4>راكب ${passengerCount}</h4>
                <div class="mb-3">
                    <label for="passengerName${passengerCount}" class="form-label">اسم الراكب</label>
                    <input type="text" id="passengerName${passengerCount}" name="Pass_name[]" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="passengerId${passengerCount}" class="form-label">رقم الهوية</label>
                    <input type="text" id="passengerId${passengerCount}" name="Pass_ID[]" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="passengerSeat${passengerCount}" class="form-label">رقم المقعد</label>
                    <input type="text" id="passengerSeat${passengerCount}" name="Pass_seat[]" class="form-control">
                </div>
            `;
            passengersContainer.appendChild(newPassenger);
        });

        companyForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(companyForm);
            fetch('company_process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('تم حفظ بيانات الرحلة والركاب بنجاح');
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

    // Other existing code...
});