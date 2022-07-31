function validate(node) {
    var result = true;
    for (let i = 0; i < node.length; i++) {
        // console.log(node[i].classList)
        if (node[i].type == 'text' || node[i].type == 'password') {
            if (validator.isEmpty(node[i].value)) {

                node[i].classList.add('error');
                node[i].nextElementSibling.style.display = 'block';
                node[i].nextElementSibling.innerHTML = 'Trường này không được bỏ trống'
                // console.log(flag);
                result = false;
            } else {
                if (node[i].type == 'text') {
                    if (!validator.isEmail(node[i].value)) {
                        node[i].classList.add('error');
                        node[i].nextElementSibling.style.display = 'block';
                        node[i].nextElementSibling.innerHTML = 'Email không đúng định dạng';
                        result = false;
                    }
                }
            }

        }
    }

    return result;
}

function removeError(node) {
    node.classList.remove('error');
    node.nextElementSibling.style.display = 'none';

}