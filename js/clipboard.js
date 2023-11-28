function copyIRtoClipboard() {
    const element = document.getElementById('IR_textarea');
    element.select();
    element.setSelectionRange(0, 99999);
    document.execCommand('copy');
}

function copyCLtoClipboard() {
    const element = document.getElementById('CL_textarea');
    element.select();
    element.setSelectionRange(0, 99999);
    document.execCommand('copy');
}

function copyCCtoClipboard() {
    const element = document.getElementById('CC_textarea');
    element.select();
    element.setSelectionRange(0, 99999);
    document.execCommand('copy');
}