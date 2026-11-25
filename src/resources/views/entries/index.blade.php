<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>自分の時間割</title>
</head>
<body>
    <h2>自分の時間割</h2>

    <p><a href="/entries/create">授業を新規登録する</a></p>

    @if ($entries->isEmpty())
        <p>まだ授業が登録されていません</p>
    @else
        @php
            $dayNames = [1 => '月', 2 => '火', 3 => '水', 4 => '木', 5 => '金'];
        @endphp
        <table border="1" cellpadding="4">
            <tr>
                <th>曜日</th>
                <th>時限</th>
                <th>授業名</th>
                <th>教室</th>
            </tr>
            @foreach ($entries as $entry)
                <tr>
                    <td>{{ $dayNames[$entry->day] ?? $entry->day }}</td>
                    <td>{{ $entry->period }}</td>
                    <td>{{ $entry->title }}</td>
                    <td>{{ $entry->room }}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
