function copyToClipboard(event) {
    const textToCopy = event.target.innerText;
    console.log(event.target)

    navigator.clipboard.writeText(event.target.innerText).then(() => {
        const link = event.target;
        link.innerText = "Copied!";
        setTimeout(() => link.innerText = textToCopy, 2000);
    });
}