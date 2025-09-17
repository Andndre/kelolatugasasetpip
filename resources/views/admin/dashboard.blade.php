@extends('layouts.admin')

@section('content')
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center gap-2">
            <button class="btn btn-light btn-sm" id="sidebarToggle">
                <i class="bi bi-list"></i>
            </button>
            <h5 class="mb-0">Dashboard</h5>
        </div>
    </div>
    <div class="card-body">
        <!-- Main Content Area with Banner Image -->
        <div class="dashboard-main-content">
            <img src="{{ asset('images/banner.jpg') }}" alt="Banner" class="banner-image">
        </div>

        <!-- Time, Date, and Calendar Section -->
        <div class="time-date-container">
            <div class="time-pill" id="currentTime">
                9:41 AM
            </div>
            <div class="date-pill" id="currentDate">
                Apr 1, 2025
            </div>

            <!-- Calendar Section -->
            <div class="calendar-section">
                <input type="text" id="calendar" class="calendar-input" placeholder="09/05/1992" readonly>
                <i class="bi bi-calendar3 calendar-icon"></i>
            </div>
        </div>
    </div>

    <!-- Include Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Flatpickr calendar
            flatpickr("#calendar", {
                inline: false,
                dateFormat: "d/m/Y",
                defaultDate: new Date(),
                showMonths: 1,
                monthSelectorType: "dropdown",
                yearSelectorType: "dropdown",
                enable: [
                    function (date) {
                        return true;
                    }
                ],
                onChange: function (selectedDates, dateStr, instance) {
                    // Handle date change if needed
                    console.log("Selected date:", dateStr);
                }
            });

            // Update current time
            function updateTime() {
                const now = new Date();
                document.getElementById('currentTime').textContent = now.toLocaleTimeString('en-US', {
                    hour: 'numeric',
                    minute: '2-digit',
                    hour12: true
                });
            }

            // Update current date
            function updateDate() {
                const now = new Date();
                document.getElementById('currentDate').textContent = now.toLocaleDateString('en-US', {
                    month: 'short',
                    day: 'numeric',
                    year: 'numeric'
                });
            }

            // Update time and date immediately and then every second
            updateTime();
            updateDate();
            setInterval(updateTime, 1000);
            setInterval(updateDate, 60000); // Update date every minute
        });
    </script>
@endsection
