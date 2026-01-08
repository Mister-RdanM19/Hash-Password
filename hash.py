import requests

# URL for hash decryption
url = "https://hashes.com/en/decrypt/hash"

# Prompt user for hash input
hash_input = input("Enter the hash you want to decrypt: ")

# Make a POST request with the hash
data = {'hash': hash_input}
response = requests.post(url, data=data)

# Print the response from the server
print("Decryption result: ")
print(response.text)
