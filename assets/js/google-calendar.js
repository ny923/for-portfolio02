// for calendar google
// window.onload = googleCalendarSet;
// function googleCalendarSet() {
//     // Googleカレンダーの埋め込みコードを分割
//     var calendarCode1 =
//         '<iframe src="https://calendar.google.com/calendar/embed?';
//     var calenderCode2 =
//         'height=600&wkst=1&ctz=Asia%2FTokyo&showPrint=0&showTabs=0&showTz=0&showCalendars=0&src=ZmVuY2luZ2NsdWIubmV4dXNAZ21haWwuY29t&color=%23039be5" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>';

//     // 今日の日付から年と月を取得
//     var today = new Date();
//     var thisYear = today.getFullYear();
//     var thisMonth = today.getMonth() + 1; // 1月=0なので+1

//     // ▼ 今月のカレンダー
//     var thisMonthStr = thisMonth < 10 ? '0' + thisMonth : String(thisMonth);
//     var datesThisMonth =
//         'dates=' +
//         thisYear +
//         thisMonthStr +
//         '01/' +
//         thisYear +
//         thisMonthStr +
//         '01&amp;';

//     document.getElementById('MonthCal').innerHTML =
//         calendarCode1 + datesThisMonth + calenderCode2;

//     // ▼ 来月のカレンダー
//     var nextYear = thisYear;
//     var nextMonth = thisMonth + 1;
//     if (nextMonth > 12) {
//         nextMonth = 1;
//         nextYear++;
//     }
//     var nextMonthStr = nextMonth < 10 ? '0' + nextMonth : String(nextMonth);
//     var datesNextMonth =
//         'dates=' +
//         nextYear +
//         nextMonthStr +
//         '01/' +
//         nextYear +
//         nextMonthStr +
//         '01&amp;';

//     document.getElementById('nextMonthCal').innerHTML =
//         calendarCode1 + datesNextMonth + calenderCode2;
// }
