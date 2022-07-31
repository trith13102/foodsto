function validate(node) {
    var result = true;
    var password_flag = 0;
    var password
    for (let i = 0; i < node.length; i++) {
        // console.log(node[i].classList)
        if (node[i].type == 'text' || node[i].type == 'password') {
            if (validator.isEmpty(node[i].value)) {

                showError(node[i]);
                node[i].nextElementSibling.innerHTML = 'Trường này không được bỏ trống'
                // console.log(flag);
                result = false;
            } else {
                if (node[i].type == 'text') {
                    if (!validator.isEmail(node[i].value)) {
                        showError(node[i]);
                        node[i].nextElementSibling.innerHTML = 'Email không đúng định dạng';
                        result = false;
                    }
                }

                if (node[i].type == 'password') {
                    if (password_flag == 0) {
                        password = node[i].value;
                        password_flag = 1;
                    } else {
                        if (node[i].value != password) {
                            showError(node[i]);
                            node[i].nextElementSibling.innerHTML = 'Nhập lại mật khẩu không khớp';
                            result = false;
                        }
                    }
                }

            }

        }
    }

    return result;
}
function showError(node) {
    node.classList.add('error');
    node.nextElementSibling.style.display = 'block';
}
function removeError(node) {
    node.classList.remove('error');
    node.nextElementSibling.style.display = 'none';

}