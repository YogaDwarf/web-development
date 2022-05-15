PROGRAM HelloUniversal(INPUT, OUTPUT);
USES
  DOS;
VAR
  QueryString: STRING;
BEGIN {HelloUniversal}
  QueryString := GetEnv('QUERY_STRING');
  WHILE NOT EOLN
  DO
    READ(QueryString, F1);
  WRITELN;
  IF QueryString = ''
  THEN
    WRITELN('Hello Anonymous!')
  ELSE
    BEGIN
      RESET(F1);
      WHILE F1 <> '='
      DO
        READ(F1, QueryString);
      REWRITE(QueryString);
      WHILE NOT EOLN
      DO
        READ(F1, QueryString)
    END;
  WRITELN('Hello dear, ', QueryString, '!')
END. {HelloUniversal}
