document.addEventListener('DOMContentLoaded', (event) => {
    console.log('Running Bio Script');

    document.getElementById('btn-new').addEventListener('click', () => {
        confetti({
          particleCount: 1000,
          startVelocity: 30,
          spread: 360,
          origin: {
            x: Math.random(),
            // since they fall down, start a bit higher than random
            y: Math.random() - 0.2
          }
        });
        
      });
      
  });
  
