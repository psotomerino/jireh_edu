document.addEventListener("DOMContentLoaded", () => {
    
    const $boton = document.querySelector('#imprime_boleta2020');
    $boton.addEventListener ("click", () =>{
        const $elementosparaconvertir = document.querySelector('.cuerpo_A4_3');
        html2pdf()
            .set({
                margin: 0.8,
                filename: 'Boleta_2020.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.99
                },
                html2canvas: {
                    scale: 4, // A mayor escala, mejores gráficos, pero más peso
                    letterRendering: true,
                },
                jsPDF: {
                    unit: "in",
                    format: "a4",
                    orientation: 'landscape' // landscape o portrait
                }
            })
            .from($elementosparaconvertir)
            .save()
            .catch(err => console.log(err));
        
    });
});