
// material ui
import TextField from '@mui/material/TextField'
import Box from '@mui/material/Box'
import Grid from '@mui/material/Grid'
import Button from '@mui/material/Button'


function Header() {
  return (
    <header className="App-header">
      <Box sx={{ width: '80%' }}>
        <Grid container justifyContent="center" alignItems="center" spacing={2}>
          <Grid item xs={8}>
            <TextField fullWidth id="outlined-basic" label="Nombre de la película " variant="outlined" />
          </Grid>
          <Grid item xs={4}>
            <Button fullWidth variant="contained">Buscar</Button>
          </Grid>
        </Grid>
      </Box>
    </header>
  )
}

export default Header