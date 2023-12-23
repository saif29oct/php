function pangrams(s: string): string {
    if(s.length < 26) return 'no pangram'
    
    let alphabets: string[] = []
    
    const strAry = s.split('')

    for(let letter of strAry){
        letter = letter.toLowerCase()
        
        if(letter !== ' ' && !alphabets.includes(letter)){
            const length = alphabets.push(letter)
            if(length === 26) return 'pangram'
        }
    }
    
    return 'no pangram';
}