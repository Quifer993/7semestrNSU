def caesar_cipher(text, shift, language='английский'):
    alphabet = 'abcdefghijklmnopqrstuvwxyz' if language == 'английский' else 'абвгдежзийклмнопрстуфхцчшщъыьэюя'
    result = ''

    for char in text:
        if char.lower() in alphabet:
            index = (alphabet.index(char.lower()) + shift) % len(alphabet)
            result += alphabet[index] if char.islower() else alphabet[index].upper()
        else:
            result += char

    return result


def encrypt_file(input_path, output_path, shift, language='английский'):
    try:
        with open(input_path, 'r', encoding='utf-8') as file:
            text = file.read()

        encrypted_text = caesar_cipher(text, shift, language)

        with open(output_path, 'w', encoding='utf-8') as file:
            file.write(encrypted_text)

        print(f'Успешно закодирован файл: {output_path}')
    except Exception as e:
        print(f'Ошибка: {e}')


def main():
    input_path = input("Путь до изначального файла с текстом:")
    shift = int(input("Требуемый сдвиг:"))
    language = input("Язык текста: английский или русский").lower()

    encrypt_file(input_path, "out.txt", shift, language)


if __name__ == "__main__":
    main()
