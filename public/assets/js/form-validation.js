function togglePassword(thisObj, inputObj) {
    if (inputObj.value !== '') {
        if (inputObj.type === 'password') {
            inputObj.type = 'text';
            thisObj.innerText = 'visibility';
        } else {
            inputObj.type = 'password';
            thisObj.innerText = 'visibility_off';
        }
    }
}
