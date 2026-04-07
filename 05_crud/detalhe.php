<!DOCTYPE html>
<html lang="pt-BR">
<head>

</head>
<body>

    <div class="container">
        <div style="display:flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px;margin-bottom:20px;">
            <h1 class="titulo-secao" style="margin: 0;">Projeto <!--nome do projeto--></h1>
            
        </div>
   

    <?php if (empty($id)): ?>
        <div class="card" style="text-align:center;padding: 40px 20px; color:#6b7280;">
            <p style="font-size:16px; margin:0 0 16px;">Nenhum projeto encontrado</p>
            <?php  $tec?>
        </div>
    <?php else: ?>
        <div style="display: grid; grid-template-columns: repeat(auto-fill,minmax(280px,1fr));gap:20px;">
            <?php foreach($projetos as $projeto): ?>
                <div class="card">
   <h3 style="margin: 0 0 8px; color: #3b579d; font-size: 17px;">
  <?php echo htmlspecialchars($projeto['nome']); ?>
        </h3>

     <p style="margin: 0 0 10px; font-size: 14px;color:#394151; line-height:1.6;">
        <?php echo htmlspecialchars($projeto['descricao']); ?>
             </p>

         <p style="margin: 0 0 6px; font-size: 13px; color:#6b7280;">
         <?php echo htmlspecialchars($projeto['tecnologias']); ?>  
         </p>

         <p style="margin: 0 0 12px; font-size: 13px; color:#6b7280;">
          <?php echo htmlspecialchars($projeto['ano']); ?>
        </p><form class="form-container" action="detalhe.php" method="post">
                <button type="submit" >Detalhes</button>

        </form>

         <?php if (!empty($projeto['link_github'])): ?>
             <a 
                 href="<?php echo htmlspecialchars($projeto['link_github']); ?>"
                 target="_blank" 
                  rel="noopener noreferrer" 
                  class="btn-secundario" > Ver no GitHub
                        </a>
         <?php endif; ?>

        </div>
    <?php endforeach; ?>
</div>

     <p style="margin-top: 16px; font-size: 14px; color:#6b7280; text-align: right;">
            <?php echo count($projetos); ?> projeto(s) encontrado(s)
        </p>

    <?php endif; ?>

    </div>
<!--Fazer um botao de saida para voltar a projetos -->
 <?php require_once __DIR__ .'/../includes/rodape.php';?>

</body>
</html>