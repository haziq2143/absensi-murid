import { Html5Qrcode } from 'html5-qrcode';

let html5QrCode; // Mendeklarasikan variabel pemindai QR
let isScanning = false; // Status pemindai

const qrCodeSuccessCallback = (decodedText, decodedResult) => {
    console.log(`Decoded text: ${decodedText}`);
    // Arahkan ke URL yang terdeteksi
    window.location.href = decodedText; 
};

const qrCodeErrorCallback = (errorMessage) => {
    console.warn(`QR code no longer in front of camera. ${errorMessage}`);
};

// Inisialisasi pemindai QR
const startScanner = () => {
    if (isScanning) return; // Jika sudah memindai, tidak perlu memulai lagi
    isScanning = true; // Mengatur status pemindai menjadi aktif

    html5QrCode = new Html5Qrcode("qr-reader");

    html5QrCode.start(
        { facingMode: "environment" }, // Menggunakan kamera belakang
        { fps: 10, qrbox: { width: 300, height: 300 } }, // Ukuran kotak QR yang lebih besar
        qrCodeSuccessCallback,
        qrCodeErrorCallback
    ).then(() => {
        console.log("QR Code scanner started.");
    }).catch(err => {
        console.error("Error starting the QR Code scanner: ", err);
        isScanning = false; // Mengatur kembali status pemindai jika gagal
    });
};

// Menambahkan event listener pada tombol
document.getElementById("start-scan").addEventListener("click", startScanner);
