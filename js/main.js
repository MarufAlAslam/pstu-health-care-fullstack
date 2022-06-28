$('.dwnldbtn').click(function(){
    // console.log(name)
    var element = document.getElementById('element-to-print');
    var opt = {
    margin:       0,
    filename:     name+'-pescription.pdf',
    image:        { type: 'jpeg', quality: 1 },
    html2canvas:  { scale: 1, dpi: 192, letterRendering: true },
    jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
    };

    // New Promise-based usage:
    html2pdf().set(opt).from(element).save();
})