document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('uploadForm');
    const fileInput = document.getElementById('imageFile');
    const fileNameText = document.getElementById('file-name');
    const loading = document.getElementById('loading');
    const result = document.getElementById('result');

    fileInput.addEventListener('change', function () {
        const file = fileInput.files[0];
        fileNameText.textContent = file ? `${file.name}` : '';
    });

    if (form) {
        form.addEventListener('submit', async function (e) {
            e.preventDefault();

            const formData = new FormData();
            formData.append("file", fileInput.files[0]);

            loading.style.display = 'block';
            result.innerHTML = '';

            try {
                const response = await fetch("http://127.0.0.1:8000/upload/", {
                    method: "POST",
                    body: formData
                });

                const text = await response.text();
                const data = JSON.parse(text);
                loading.style.display = 'none';

                result.innerHTML = `
                    <p><strong>Prediction:</strong> ${data.prediction}</p>
                    <p><strong>Confidence:</strong> ${data.confidence.toFixed(2)}%</p>
                `;
            } catch (error) {
                loading.style.display = 'none';
                result.innerHTML = `<p style="color: red;">Error uploading image. Check console for details.</p>`;
            }
        });
    }
});
