<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>授業を登録</title>
</head>
<body>
    <h2>授業を新規登録する</h2>

    <form method="POST" action="/entries">
        @csrf

        <p>
            <label for="day">曜日</label>
            <select name="day" id="day">
                <option value="1">月</option>
                <option value="2">火</option>
                <option value="3">水</option>
                <option value="4">木</option>
                <option value="5">金</option>
            </select>
        </p>

        <p>
            <label for="period">時限</label>
            <select name="period" id="period">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </p>

        <p>
            <label for="title">授業名</label>
            <input type="text" name="title" id="title" required>
        </p>

        <p>
            <label for="room">教室</label>
            <input type="text" name="room" id="room">
        </p>

        <button type="submit">登録する</button>
    </form>

    <p><a href="/entries">一覧に戻る</a></p>
</body>
</html>
