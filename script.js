document.getElementById('button').addEventListener('click', () => {
  const formData = new FormData(document.getElementById('form'));

  fetch('model/insert.php', {
      method: 'POST',
      body: formData
  })
  .then(response => response.text())
  .then(data => {
      console.log(data); // Exibe a resposta do servidor
      
      // Atualiza a tabela
      fetch('model/consulta.php')
          .then(response => response.text())
          .then(tableData => {
              document.querySelector('#table tbody').innerHTML = tableData;
          });
  })
  .catch(error => console.error('Erro:', error));
});


const table = document.getElementById('table');

const names = [];
const Values = [];

  for (let i = 1; i < table.rows.length; i++) {
    const row = table.rows[i];
    names.push(row.cells[1].textContent);

    // Remove o caractere "%" antes de adicionar ao array
    const participationValue = row.cells[3].textContent.replace('%', '');
    Values.push(participationValue);
  }

const ctx = document.getElementById('dashbord');
    new Chart(ctx, {
    type: 'doughnut',
    data:{ labels: names,
    datasets: [{
      label: 'Particiation',
      data: Values,
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)',
        'rgb(61, 230, 83)',
        'rgb(220, 3, 240)',
        'rgb(2, 255, 234)',
        'rgb(255, 0, 0)',
        'rgb(184, 194, 46)',
      ],
      hoverOffset: 4
    }]
  }
  });

