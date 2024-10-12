class Task extands Model{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

}