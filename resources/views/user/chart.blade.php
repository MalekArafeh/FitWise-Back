<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weight Tracker Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h2>Weight Tracker for 30 Days</h2>
    <canvas id="weightChart" ></canvas>

    <script>
        // البيانات المستلمة من الخادم
        const weights = @json($weights); // تحويل البيانات إلى JSON
        const days = @json($days).map(day => `Day ${day}`); // إضافة "Day" لكل يوم

        // إعداد الرسم البياني
        const ctx = document.getElementById('weightChart').getContext('2d');
        const weightChart = new Chart(ctx, {
            type: 'line', // نوع الرسم البياني (خطّي)
            data: {
                labels: days, // الأيام
                datasets: [{
                    label: 'Weight (kg)', // اسم البيانات
                    data: weights, // بيانات الوزن
                    borderColor: 'rgba(75, 192, 192, 1)', // لون الخط
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // لون الخلفية
                    borderWidth: 2 // سماكة الخط
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false // يبدأ من أدنى وزن مسجل
                    }
                }
            }
        });
    </script>
</body>
</html>
