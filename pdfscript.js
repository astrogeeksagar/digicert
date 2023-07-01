function generatePDF () {
    const element = document.getElementById("certificate");

    html2pdf()
    .from(element)
    .save();
}