<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Mijozni ro'yxatga olish</title>
</head>
<body>

<form action="client_register_create" method="post">
    @csrf
    <label for="">Familiya</label>
    <input type="text" name="surname">
    <br>
    <br>
    <label for="">Ism</label>
    <input type="text" name="name">
    <br>
    <br>
    <label for="">Otasining ismi</label>
    <input type="text" name="fullname">
    <br>
    <br>
    <label for="">Fuqaroligi</label>
    <input type="text" name="citizenship">
    <br>
    <br>
    <label for="">Pasport seriyasi</label>
    <input type="text" name="passport_series">
    <br>
    <br>
    <label for="">Pasport raqam</label>
    <input type="number" name="passport_number">
    <br>
    <br>
    <label for="">Ro'yxatdan o'tish sanasi</label>
    <input type="date" name="register_date">
    <br>
    <br>
    <label for="">Chiqish sanasi</label>
    <input type="date" name="release_date">
    <br>
    <br>
    <label for="">Xona toifasi</label>
    <select name="room_category">
        <option>Tanlash</option>
        <option>1-darajali</option>
        <option>2-darajali</option>
        <option>3-darajali</option>
        <option>4-darajali</option>
    </select>
    <br>
    <br>
    <label for="">Xona turi</label>
    <select name="room_type">
        <option>Tanlash</option>
        <option>1-kishilik</option>
        <option>2-kishilik</option>
        <option>3-kishilik</option>
        <option>4-kishilik</option>
        <option>5-kishilik</option>
    </select>
    <br>
    <br>
    <label for="">Xona raqami</label>
    <select name="room_number">
        <option>Tanlash</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
    </select>
    <br>
    <br>
    <button type="submit">Kiritish</button><a href="/clients">Mijozlar</a>
</form>
    
</body>
</html>