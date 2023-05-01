<form action="<?= BASE_URL . '/slider-add' ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="image">
    <select name="type" id="">
        <option value="1">Slider 1</option>
        <option value="2">Slider 2</option>
    </select>
    <button>Send</button>
</form>