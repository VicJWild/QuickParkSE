<script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
  <script>

let currentId = 1;
    const cubicles = {};

    function addNewRecord() {
        const date = new Date();
        const id = String(currentId).padStart(2, '0');
        const registrationDate = date.toISOString().split('T')[0];
        const registrationTime = date.toTimeString().split(' ')[0];
        const position = getAvailablePosition();
        if (!position) {
            alert('No available cubicles');
            return;
        }
        const code = `${id}-${registrationDate}-${position}`;
        const rate = "$3";

        const newRow = `
            <tr id="record-${code}">
                <td class="border px-4 py-2">${id}</td>
                <td class="border px-4 py-2">${registrationDate}</td>
                <td class="border px-4 py-2">${registrationTime}</td>
                <td class="border px-4 py-2">${position}</td>
                <td class="border px-4 py-2">${code}</td>
                <td class="border px-4 py-2">${rate}</td>
                <td class="border px-4 py-2" id="status-${code}">Unpaid</td>
                <td class="border px-4 py-2">
                    <button class="bg-gray-800 text-white p-2 rounded hover:bg-gray-700" onclick="generatePDF('${id}', '${registrationDate}', '${registrationTime}', '${position}', '${code}', '${rate}')">
                        Generate PDF
                    </button>
                </td>
            </tr>
        `;

        document.getElementById('records-table-body').insertAdjacentHTML('beforeend', newRow);
        cubicles[position] = 'Occupied';
        updateCubicleStatus(position);
        currentId++;
    }

    function generatePDF(id, date, time, position, code, rate) {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();

        doc.text(`ID: ${id}`, 10, 10);
        doc.text(`Date: ${date}`, 10, 20);
        doc.text(`Time: ${time}`, 10, 30);
        doc.text(`Position: ${position}`, 10, 40);
        doc.text(`Code: ${code}`, 10, 50);
        doc.text(`Rate: ${rate}`, 10, 60);

        doc.save(`Record_${id}.pdf`);
    }