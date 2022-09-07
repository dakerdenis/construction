<div class="add__element__wrapper">
    <form action="./includes/add.php" method="POST" class="add__element__form">
        <div class="admin_input__block">
            <div class="admin_input_desc">Имя продукта:</div>
            <div class="admin_input_input">
                <input type="text" name="name" id="name">
            </div>
        </div>
        <div class="admin_input__block">
            <div class="admin_input_desc">Изображение:</div>
            <div class="admin_input_input">
                <input type="file" name="file" id="file" multiple>
            </div>
        </div>
        <div id="load"></div>

        <div class="admin_input__block">
            <div class="admin_input_desc">Тип:</div>
            <div class="admin_input_input">
                <input type="text" name="type" id="type">
            </div>
        </div>
        <div class="admin_input__block">
            <div class="admin_input_desc">Цена:</div>
            <div class="admin_input_input">
                <input type="text" name="price" id="price">
            </div>
        </div>

        <div class="admin_input__block">
            <div class="admin_input_desc">Описание:</div>
            <div class="admin_input_input">
                    <textarea id="description" name="description" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class="admin_input_block">
            <div class="admin_input_submit">
                <input type="submit" name="create_element" value="Загрузить">
            </div>
        </div>
    </form>
</div>


<script>
    let load = document.querySelector('#load');

document.querySelector('#file').addEventListener('change', function(e) {
  let tgt = e.target || window.event.srcElement,
        files = tgt.files;

  load.innerHTML = '';

  if(files && files.length) {
    for(let i = 0; i < files.length; i++) {
        let $self = files[i],
                fr = new FileReader();
        fr.onload = function(e) {
        load.insertAdjacentHTML('beforeEnd', `<div class="load-img"><img src="${e.srcElement.result}"/><p>${$self.name}</p></div>`);
        }
        fr.readAsDataURL(files[i]);
    };
  }
});
</script>