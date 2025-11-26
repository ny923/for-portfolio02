// FullCalendar　↑とほぼ変わらず没
// document.addEventListener('DOMContentLoaded', function () {
//     var calendarEl = document.getElementById('calendar');
//     var calendar = new FullCalendar.Calendar(calendarEl, {
//         locale: 'ja', // 日本語化
//         initialView: 'dayGridMonth', // 月表示
//         initialDate: '2025-10-01', // 2025年月を初期表示
//         events: [
//             {
//                 title: ' ',
//                 daysOfWeek: [3], // 水、
//                 daysOfWeek: [3], // 水にイベントを設定
//             },
//         ],
//     });
//     calendar.render();
// });

// // 来月
// const nextMonth = new Date();
// nextMonth.setMonth(nextMonth.getMonth() + 1);
// const calendarNext = new FullCalendar.Calendar(
//     document.getElementById('calendarNext'),
//     {
//         locale: 'ja',
//         initialView: 'dayGridMonth',
//         initialDate: nextMonth,
//         events: [
//             {
//                 title: ' ',
//                 daysOfWeek: [3], // 水、
//                 daysOfWeek: [3], // 水にイベントを設定
//             },
//         ],
//     }
// );
// calendarNext.render();
// FullCalendarここまで
