def is_armstrong(number):
    # Convert number to string to get number of digits
    num_str = str(number)
    num_digits = len(num_str)

    # Calculate sum of digits each raised to the power of num_digits
    total = sum(int(digit) ** num_digits for digit in num_str)

    # Compare and return result
    return total == number


# Example usage:
num = 153
if is_armstrong(num):
    print(f"{num} is an Armstrong number.")
else:
    print(f"{num} is not an Armstrong number.")
