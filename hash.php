<?php

// URL untuk mendekripsi hash
$url = "https://hashes.com/en/decrypt/hash";

// Ambil hash dari input pengguna
echo "Enter the hash you want to decrypt: ";
$hash = trim(fgets(STDIN));

// Siapkan data yang akan dikirim dalam bentuk POST
$data = array('hash' => $hash);

// Inisialisasi cURL
$ch = curl_init();

// Atur opsi cURL untuk permintaan POST
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi permintaan cURL
$response = curl_exec($ch);

// Cek jika terjadi kesalahan
if(curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Tampilkan respons dari server
    echo "Decryption result:\n";
    echo $response;
}

// Tutup koneksi cURL
curl_close($ch);
?>
