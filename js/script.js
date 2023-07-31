// Função para avançar os slides automaticamente
function autoSlide() {
    const slider = document.querySelector('.slider');
    const scrollAmount = slider.clientWidth; // Avança um slide por vez (largura do slide)
  
    // Verifica se chegou ao último slide
    if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth) {
      // Se sim, volta ao primeiro slide
      slider.scrollTo(0, 0);
    } else {
      // Se não, avança para o próximo slide
      slider.scrollBy(scrollAmount, 0);
    }
  }
  
  // Intervalo de tempo em milissegundos para a transição automática (exemplo: 5 segundos)
  const intervalTime = 2500; // 5 segundos
  
  // Inicia a transição automática
  let interval = setInterval(autoSlide, intervalTime);