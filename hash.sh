#!/bin/bash

# URL for hash decryption
url="https://hashes.com/en/decrypt/hash"

# Prompt user for hash input
echo "Enter the hash you want to decrypt: "
read hash

# Make a POST request with curl to send the hash
response=$(curl -s -X POST -d "hash=$hash" "$url")

# Display the response from the server
echo "Decryption result: "
echo "$response"
