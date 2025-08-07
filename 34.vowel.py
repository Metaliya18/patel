def is_vowel(char):
    if len(char) != 1:
        raise ValueError("Input must be a single character.")
    return char.lower() in 'aeiou'
