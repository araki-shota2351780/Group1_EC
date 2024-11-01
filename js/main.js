function submitForm() {
    const form = document.getElementById('myForm');
    const selectedAction = document.getElementById('actionSelect').value;
    form.action = selectedAction;
    form.submit();
}
