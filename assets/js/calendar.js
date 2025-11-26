// event-calendarの場合 https://github.com/vkurko/calendar
// イベントから書かないと表示されない
// 毎週のイベントを作成する関数
function generateWeeklyEvents(startDate, weeks, title) {
    const events = [];
    const start = new Date(startDate);

    for (let i = 0; i < weeks; i++) {
        const d = new Date(start);
        d.setDate(start.getDate() + i * 7);

        events.push({
            id: 'ev-' + i,
            start: d.toISOString().split('T')[0], // YYYY-MM-DD
            end: d.toISOString().split('T')[0],
            title: title,
        });
    }
    return events;
}
// 今週から0週間分のイベントを作成
const weeklyEvents = generateWeeklyEvents('2025-09-30', 999, '');

// 突発イベント
// const specialEvent = {
//     id: 'ev-2025-09-25',
//     start: '2025-09-25',
//     end: '2025-09-25',
//     title: '休業日',
// };
// weeklyEvents.push(specialEvent);

// 今月のカレンダー;
const calendar = new EventCalendar(document.getElementById('calendar'), {
    view: 'dayGridMonth',
    events: weeklyEvents,

    dayCellFormat: function (date) {
        return date.getDate().toString().padStart(1, '');
    },
});

// 来月のカレンダー
const nextMonth = new Date();
nextMonth.setMonth(nextMonth.getMonth() + 1);

const calendarNext = new EventCalendar(
    document.getElementById('calendarNext'),
    {
        view: 'dayGridMonth',
        date: nextMonth, // 初期表示を来月にする
        events: weeklyEvents,

        dayCellFormat: function (date) {
            return date.getDate().toString().padStart(1, '');
        },
    }
);
