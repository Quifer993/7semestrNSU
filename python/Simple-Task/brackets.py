def is_valid_sequence(sequence):
    stack = []

    for bracket in sequence:
        if bracket == '(' or bracket == '[' or bracket == '{':
            stack.append(bracket)
        elif bracket == ')' and stack and stack[-1] == '(':
            stack.pop()
        elif bracket == ']' and stack and stack[-1] == '[':
            stack.pop()
        elif bracket == '}' and stack and stack[-1] == '{':
            stack.pop()
        else:
            return False

    return not stack


def main():
    sequence = input("Введите скобочную последовательность: ")

    if is_valid_sequence(sequence):
        print("Правильная последовательность")
    else:
        print("Неправильная последовательность")


if __name__ == "__main__":
    main()